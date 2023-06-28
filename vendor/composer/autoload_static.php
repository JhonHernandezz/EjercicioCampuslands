<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a236fcda94eb93433a7cdc66c989460
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
            0 => __DIR__ . '/../..' . '/script',
            1 => __DIR__ . '/../..' . '/script/db',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a236fcda94eb93433a7cdc66c989460::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a236fcda94eb93433a7cdc66c989460::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8a236fcda94eb93433a7cdc66c989460::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8a236fcda94eb93433a7cdc66c989460::$classMap;

        }, null, ClassLoader::class);
    }
}