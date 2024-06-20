<?php

namespace Mohamed\BitlyShortner;

use Carbon\Laravel\ServiceProvider;

class BitlyServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/bitlyconfig.php' => config_path('bitlyconfig.php'),
        ]);
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/bitlyconfig.php', 'bitlyconfig'
        );
    }
}


?>
