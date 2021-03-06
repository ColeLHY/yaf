<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45c0cfc3ace35be3979fa19437f77ad8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45c0cfc3ace35be3979fa19437f77ad8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45c0cfc3ace35be3979fa19437f77ad8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
