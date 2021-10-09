<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bb61c0b19a0cad956282ce317cf6826
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gaurang\\ResponseGenerator\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gaurang\\ResponseGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bb61c0b19a0cad956282ce317cf6826::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bb61c0b19a0cad956282ce317cf6826::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7bb61c0b19a0cad956282ce317cf6826::$classMap;

        }, null, ClassLoader::class);
    }
}
