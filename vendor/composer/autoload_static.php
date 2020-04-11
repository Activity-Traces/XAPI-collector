<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8036dc9435634b8fe74d560d57357566
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8036dc9435634b8fe74d560d57357566::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8036dc9435634b8fe74d560d57357566::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
