<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc35790d33bcbc33be143a1de7232e89d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ashadozzaman\\Contact\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ashadozzaman\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc35790d33bcbc33be143a1de7232e89d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc35790d33bcbc33be143a1de7232e89d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc35790d33bcbc33be143a1de7232e89d::$classMap;

        }, null, ClassLoader::class);
    }
}
