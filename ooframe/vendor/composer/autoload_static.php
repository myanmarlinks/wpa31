<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4c414b66a5181b92813434f3b195f13
{
    public static $classMap = array (
        'DB' => __DIR__ . '/../..' . '/wpa31/provider/database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb4c414b66a5181b92813434f3b195f13::$classMap;

        }, null, ClassLoader::class);
    }
}
