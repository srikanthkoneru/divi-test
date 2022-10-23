<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd0ba9b169b8aab78df1b856f1e13539d
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

        spl_autoload_register(array('ComposerAutoloaderInitd0ba9b169b8aab78df1b856f1e13539d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd0ba9b169b8aab78df1b856f1e13539d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd0ba9b169b8aab78df1b856f1e13539d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
