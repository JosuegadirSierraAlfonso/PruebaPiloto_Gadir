<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf1a65fb454afa7ffe648160176974ec
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scripts/db',
            1 => __DIR__ . '/../..' . '/scripts/areas',
            2 => __DIR__ . '/../..' . '/scripts/system',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf1a65fb454afa7ffe648160176974ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf1a65fb454afa7ffe648160176974ec::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdf1a65fb454afa7ffe648160176974ec::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdf1a65fb454afa7ffe648160176974ec::$classMap;

        }, null, ClassLoader::class);
    }
}
