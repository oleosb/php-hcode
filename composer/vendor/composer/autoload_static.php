<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc936d7791adc0597476b1acaa6e1fe7c
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc936d7791adc0597476b1acaa6e1fe7c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc936d7791adc0597476b1acaa6e1fe7c::$classMap;

        }, null, ClassLoader::class);
    }
}
