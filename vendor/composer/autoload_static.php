<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d9f29efe9501b5235c7bf2629f8e1a2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\sources\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\sources\\' => 
        array (
            0 => __DIR__ . '/../..' . '/sources',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d9f29efe9501b5235c7bf2629f8e1a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d9f29efe9501b5235c7bf2629f8e1a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d9f29efe9501b5235c7bf2629f8e1a2::$classMap;

        }, null, ClassLoader::class);
    }
}
