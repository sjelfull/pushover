<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63ff6ae7906c8a02f7d5394a43bd915e
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LeonardoTeixeira\\Pushover\\' => 26,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LeonardoTeixeira\\Pushover\\' => 
        array (
            0 => __DIR__ . '/..' . '/leonardoteixeira/pushover/src/LeonardoTeixeira/Pushover',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63ff6ae7906c8a02f7d5394a43bd915e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63ff6ae7906c8a02f7d5394a43bd915e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit63ff6ae7906c8a02f7d5394a43bd915e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
