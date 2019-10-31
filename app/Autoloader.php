<?php
namespace App;

/**
 * Autoload class App
 * @package App
 */
class Autoloader {
    
   /**
    * Register autoloader
    *
    * @return void
    */
    public static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

	/**
     * Require the file for class
     *
     * @param string $class
     * @return void
     */
    public static function autoload(string $class) {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
    }

}