<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita063485ba8979dcc225afbbb5aedc54a
{
    public static $files = array (
        '94c6c2c98bf7e66df5ebb047743a46b7' => __DIR__ . '/../..' . '/src/lib/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'simonxv\\thinklib\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'simonxv\\thinklib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita063485ba8979dcc225afbbb5aedc54a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita063485ba8979dcc225afbbb5aedc54a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
