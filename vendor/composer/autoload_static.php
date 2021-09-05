<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09f480952de5efbbf6b56f44134bccc7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\EventDispatcher\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09f480952de5efbbf6b56f44134bccc7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09f480952de5efbbf6b56f44134bccc7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}