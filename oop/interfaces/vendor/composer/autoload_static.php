<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40d0db53b51ea18e39d976db468fc7f2
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sorting\\' => 8,
        ),
        'i' => 
        array (
            'interfaces\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sorting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/interfaces',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40d0db53b51ea18e39d976db468fc7f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40d0db53b51ea18e39d976db468fc7f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
