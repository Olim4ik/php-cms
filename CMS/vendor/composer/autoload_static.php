<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7d735bd8edd46b9f95cb109a6630b98
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7d735bd8edd46b9f95cb109a6630b98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7d735bd8edd46b9f95cb109a6630b98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7d735bd8edd46b9f95cb109a6630b98::$classMap;

        }, null, ClassLoader::class);
    }
}