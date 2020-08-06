<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function d($str) {
    echo '<pre>';
    print_r($str);
    echo '</pre>';
    exit;
}