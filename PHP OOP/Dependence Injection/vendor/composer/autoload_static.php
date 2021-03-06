<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb9ba803bdbb7405bd2d9b13a0a1c9e3
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb9ba803bdbb7405bd2d9b13a0a1c9e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb9ba803bdbb7405bd2d9b13a0a1c9e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb9ba803bdbb7405bd2d9b13a0a1c9e3::$classMap;

        }, null, ClassLoader::class);
    }
}
