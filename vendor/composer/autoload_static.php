<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8d891d3aa792bab902aa036188ce7e8
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8d891d3aa792bab902aa036188ce7e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8d891d3aa792bab902aa036188ce7e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb8d891d3aa792bab902aa036188ce7e8::$classMap;

        }, null, ClassLoader::class);
    }
}