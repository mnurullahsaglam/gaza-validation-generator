<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ec24b47d56fdecf6382608487d29508
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gaza\\ValidationGenerator\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gaza\\ValidationGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ec24b47d56fdecf6382608487d29508::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ec24b47d56fdecf6382608487d29508::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ec24b47d56fdecf6382608487d29508::$classMap;

        }, null, ClassLoader::class);
    }
}
