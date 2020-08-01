<?php

require 'application/lib/Dev.php';
require 'application/lib/rb.php';
require 'application/lib/Smarty/Smarty.class.php';

use application\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

Router::start();