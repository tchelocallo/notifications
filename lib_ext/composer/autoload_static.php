<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a93977b23d4ec0ba381dd301ffe652c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'N' => 
        array (
            'Notifications\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Notifications\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a93977b23d4ec0ba381dd301ffe652c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a93977b23d4ec0ba381dd301ffe652c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
