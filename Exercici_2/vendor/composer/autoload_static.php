<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70308aefc1fdce66a838d8780cf32e54
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Diactoros\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'ProjectesWeb\\' => 13,
        ),
        'A' => 
        array (
            'Aura\\Router\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'ProjectesWeb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Aura\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/router/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70308aefc1fdce66a838d8780cf32e54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70308aefc1fdce66a838d8780cf32e54::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
