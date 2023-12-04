<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit387eaf88c070d90b7416e369ea943579
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\PhpPdo\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\PhpPdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit387eaf88c070d90b7416e369ea943579::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit387eaf88c070d90b7416e369ea943579::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit387eaf88c070d90b7416e369ea943579::$classMap;

        }, null, ClassLoader::class);
    }
}
