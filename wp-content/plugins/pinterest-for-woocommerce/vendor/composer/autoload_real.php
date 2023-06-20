<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf689c67a2d7cb8bb2a45c4f9903bebad
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

        spl_autoload_register(array('ComposerAutoloaderInitf689c67a2d7cb8bb2a45c4f9903bebad', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf689c67a2d7cb8bb2a45c4f9903bebad', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf689c67a2d7cb8bb2a45c4f9903bebad::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}