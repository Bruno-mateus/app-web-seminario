<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5e20733c79b7e0b3c5bc79ed41b8f678
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit5e20733c79b7e0b3c5bc79ed41b8f678', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5e20733c79b7e0b3c5bc79ed41b8f678', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit5e20733c79b7e0b3c5bc79ed41b8f678::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
