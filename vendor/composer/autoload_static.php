<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1b0bff8a3e1bed8eee14a692a5db7c9
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'GatewayWorker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'GatewayWorker\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/gateway-worker/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1b0bff8a3e1bed8eee14a692a5db7c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1b0bff8a3e1bed8eee14a692a5db7c9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
