<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40dba26fee0805ed7c9b84692ca36f13
{
    public static $files = array (
        '1ad90a2ffaade3f5097942a44faabdb2' => __DIR__ . '/../..' . '/source/Support/Config.php',
        '07d50abb231e8774e65c1905b2bd3e01' => __DIR__ . '/../..' . '/source/Support/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40dba26fee0805ed7c9b84692ca36f13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40dba26fee0805ed7c9b84692ca36f13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40dba26fee0805ed7c9b84692ca36f13::$classMap;

        }, null, ClassLoader::class);
    }
}
