<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ee49ec3eac58c7a8055c9fa0c8f27f5
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lib\\' => 4,
        ),
        'I' => 
        array (
            'IP\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'IP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'IP\\KnowMyIP' => __DIR__ . '/../..' . '/src/knowmyip.php',
        'Lib\\BaseSerializer' => __DIR__ . '/../..' . '/lib/baseSerializer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ee49ec3eac58c7a8055c9fa0c8f27f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ee49ec3eac58c7a8055c9fa0c8f27f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ee49ec3eac58c7a8055c9fa0c8f27f5::$classMap;

        }, null, ClassLoader::class);
    }
}
