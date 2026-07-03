<?php

namespace PSP\Core;

if ( ! defined('ABSPATH') ) exit;

class Autoloader {

    public static function register() {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class) {

        if (strpos($class, 'PSP\\') !== 0) {
            return;
        }

        $class = str_replace('PSP\\Core\\', '', $class);
        $class = str_replace('\\', '/', $class);

        $file = PSP_PATH . 'includes/core/' . strtolower($class) . '.php';

        if (file_exists($file)) {
            require $file;
        }
    }
}

Autoloader::register();