<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4fbe4b29534ca718f5050bc02f4e34d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4fbe4b29534ca718f5050bc02f4e34d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4fbe4b29534ca718f5050bc02f4e34d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf4fbe4b29534ca718f5050bc02f4e34d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
