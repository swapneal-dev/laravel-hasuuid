<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcba87f793d7c22abde06e08511d81c31
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SwapnealDev\\LaravelHasuuid\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SwapnealDev\\LaravelHasuuid\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcba87f793d7c22abde06e08511d81c31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcba87f793d7c22abde06e08511d81c31::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcba87f793d7c22abde06e08511d81c31::$classMap;

        }, null, ClassLoader::class);
    }
}