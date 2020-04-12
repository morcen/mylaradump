<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc53d36c44fde8b3ad4d1dd3f38a0ef9
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Morcen\\MDump\\' => 13,
        ),
        'I' => 
        array (
            'Ifsnop\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Morcen\\MDump\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/morcen/m-dump/src',
        ),
        'Ifsnop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ifsnop/mysqldump-php/src/Ifsnop',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc53d36c44fde8b3ad4d1dd3f38a0ef9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc53d36c44fde8b3ad4d1dd3f38a0ef9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
