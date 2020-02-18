<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16df08ff6946a1a788b736fb005c7fa7
{
    public static $files = array (
        '1962eb38a2207e9a5c3fe81dd045ccbd' => __DIR__ . '/..' . '/magenest/core/registration.php',
        '41b80540d312cdb5062ee82e17846bf2' => __DIR__ . '/../..' . '/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Magenest\\MultipleWishlist\\' => 26,
            'Magenest\\Core\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Magenest\\MultipleWishlist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Magenest\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/magenest/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16df08ff6946a1a788b736fb005c7fa7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16df08ff6946a1a788b736fb005c7fa7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
