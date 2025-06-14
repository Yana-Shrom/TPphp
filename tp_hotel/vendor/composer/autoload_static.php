<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fe9e7446275bf0a9b2387bc69afa028
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hotel\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hotel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fe9e7446275bf0a9b2387bc69afa028::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fe9e7446275bf0a9b2387bc69afa028::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fe9e7446275bf0a9b2387bc69afa028::$classMap;

        }, null, ClassLoader::class);
    }
}
