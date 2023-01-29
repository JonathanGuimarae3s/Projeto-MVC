<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbaf823f77635dd5d23315f03d22ed117
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbaf823f77635dd5d23315f03d22ed117::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbaf823f77635dd5d23315f03d22ed117::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbaf823f77635dd5d23315f03d22ed117::$classMap;

        }, null, ClassLoader::class);
    }
}
