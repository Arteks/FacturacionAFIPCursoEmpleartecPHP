<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6b378805bcd71090592150202326c7a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tordek\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tordek\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tordek',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6b378805bcd71090592150202326c7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6b378805bcd71090592150202326c7a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
