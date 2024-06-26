<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97ab7612a20e001f75cca17cea3f7cac
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Ovillalt\\Practicasphp\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ovillalt\\Practicasphp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit97ab7612a20e001f75cca17cea3f7cac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97ab7612a20e001f75cca17cea3f7cac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97ab7612a20e001f75cca17cea3f7cac::$classMap;

        }, null, ClassLoader::class);
    }
}
