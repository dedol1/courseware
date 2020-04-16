<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb3ff3bb8566a4e7ec002509ea66e770
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb3ff3bb8566a4e7ec002509ea66e770::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb3ff3bb8566a4e7ec002509ea66e770::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
