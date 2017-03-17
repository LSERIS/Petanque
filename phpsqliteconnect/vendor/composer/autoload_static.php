<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6149d86139786b4579624c18ebc8bdd5
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Config' => __DIR__ . '/../..' . '/app/Config.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6149d86139786b4579624c18ebc8bdd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6149d86139786b4579624c18ebc8bdd5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6149d86139786b4579624c18ebc8bdd5::$classMap;

        }, null, ClassLoader::class);
    }
}
