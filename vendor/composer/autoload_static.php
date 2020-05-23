<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4845ef806bf2d6856c5a03cb8cd0166
{
    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jc\\numero_letras\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jc\\numero_letras\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4845ef806bf2d6856c5a03cb8cd0166::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4845ef806bf2d6856c5a03cb8cd0166::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
