<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa4b700c5fc576db1106ccb02729555b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPVersion\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPVersion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa4b700c5fc576db1106ccb02729555b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa4b700c5fc576db1106ccb02729555b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
