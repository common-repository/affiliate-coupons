<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94109bbc800fbb950e85ff06c82adda0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetaBox\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetaBox\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpmetabox/meta-box/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94109bbc800fbb950e85ff06c82adda0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94109bbc800fbb950e85ff06c82adda0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94109bbc800fbb950e85ff06c82adda0::$classMap;

        }, null, ClassLoader::class);
    }
}
