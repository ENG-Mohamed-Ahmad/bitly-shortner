<?php
namespace Mohamed\BitlyShortner;

class Bitly
{

    public static function shortner($long_link = ''){
        
        $token = env('BITLY_TOKEN');

        if (empty($long_link)) {
            throw new \Exception('Please Provide Long Link');
        }
        config('bitlyconfig.token');
        if (is_null($token == getBitlyToken())) {
            
            throw new \Exception('Please Provide Token in bitlyconfig.php file');
        }

        $requestBody = json_encode(
            [
                    "domain"=> "bit.ly",
                    "long_url"=> $long_link,
                ]
            );

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-ssl.bitly.com/v4/shorten',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $requestBody,
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '. $token,
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);

        $response = json_decode($response);

        return isset($response) ? $response->link : '';
    }
}

?>


?>
