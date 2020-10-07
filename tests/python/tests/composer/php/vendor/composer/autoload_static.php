<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc45cd3fe026f678739dcbe219517b086
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VK\\Utils\\' => 9,
            'VK\\Feed\\' => 8,
            'VK\\Common\\Pkg2\\' => 15,
            'VK\\Common\\Pkg1\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VK\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/vk/utils/src',
        ),
        'VK\\Feed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/tests',
        ),
        'VK\\Common\\Pkg2\\' => 
        array (
            0 => __DIR__ . '/..' . '/vk/pkg2/src',
        ),
        'VK\\Common\\Pkg1\\' => 
        array (
            0 => __DIR__ . '/..' . '/vk/pkg1/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc45cd3fe026f678739dcbe219517b086::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc45cd3fe026f678739dcbe219517b086::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
