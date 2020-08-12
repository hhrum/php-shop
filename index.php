<?php

require 'application/lib/Dev.php';
require 'application/lib/rb.php';
require 'application/lib/Smarty/Smarty.class.php';

$main_config = require 'application/config/main.php';
$response_errors = require 'application/config/response_errors.php';

use application\core\Router;
header('Access-Control-Allow-Origin: *');

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

Router::start();