<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d0c647f0c26e42f839b108264190b88
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TmsLogger\\' => 10,
        ),
        'P' => 
        array (
            'PDOcrud\\' => 8,
        ),
        'C' => 
        array (
            'ConnectionPDO\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TmsLogger\\' => 
        array (
            0 => __DIR__ . '/../..' . '/pdo/toDoFiles',
        ),
        'PDOcrud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/pdo/toDoFiles',
        ),
        'ConnectionPDO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/loggerapp-main/app/data',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d0c647f0c26e42f839b108264190b88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d0c647f0c26e42f839b108264190b88::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d0c647f0c26e42f839b108264190b88::$classMap;

        }, null, ClassLoader::class);
    }
}
