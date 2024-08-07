<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcacac1ebf57de81e85c2f2dcbe95b049
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dikah\\OopPraktikum7\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dikah\\OopPraktikum7\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcacac1ebf57de81e85c2f2dcbe95b049::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcacac1ebf57de81e85c2f2dcbe95b049::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcacac1ebf57de81e85c2f2dcbe95b049::$classMap;

        }, null, ClassLoader::class);
    }
}
