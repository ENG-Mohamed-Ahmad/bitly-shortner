<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bec9ca44a83fe12a0f2dddd785ae900
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mohamed\\BitlyShortner\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mohamed\\BitlyShortner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bec9ca44a83fe12a0f2dddd785ae900::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bec9ca44a83fe12a0f2dddd785ae900::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bec9ca44a83fe12a0f2dddd785ae900::$classMap;

        }, null, ClassLoader::class);
    }
}