<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1a8411021757ece6b16b75de02a5587
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1a8411021757ece6b16b75de02a5587::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1a8411021757ece6b16b75de02a5587::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1a8411021757ece6b16b75de02a5587::$classMap;

        }, null, ClassLoader::class);
    }
}
