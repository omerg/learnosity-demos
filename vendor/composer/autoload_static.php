<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab19d04ac42e6df2196f98f38bd86a0f
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'LearnositySdk\\' => 
            array (
                0 => __DIR__ . '/..' . '/learnosity/learnosity-sdk-php/src',
                1 => __DIR__ . '/..' . '/learnosity/learnosity-sdk-php/src/tests',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitab19d04ac42e6df2196f98f38bd86a0f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
