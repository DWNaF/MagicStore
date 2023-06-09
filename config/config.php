<?php

include "autoload.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
}

if (!defined('REL_PATH')) {
    define('REL_PATH', DIRECTORY_SEPARATOR . basename(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR);
}

if (!defined('PUBLIC_PATH')) {
    define('PUBLIC_PATH', REL_PATH . 'public' . DIRECTORY_SEPARATOR);
}

if (!defined('CSS_DIRECTORY')) {
    define('CSS_DIRECTORY', PUBLIC_PATH . 'css' . DIRECTORY_SEPARATOR);
}

if (!defined('ASSETS_DIRECTORY')) {
    define('ASSETS_DIRECTORY', CSS_DIRECTORY . 'assets' . DIRECTORY_SEPARATOR);
}

if (!defined('JS_DIRECTORY')) {
    define('JS_DIRECTORY', PUBLIC_PATH . 'js' . DIRECTORY_SEPARATOR);
}

// JS DIRECTORY ABSOLUTE PATH
if (!defined('JS_DIRECTORY_ABSOLUTE')) {
    define('JS_DIRECTORY_ABSOLUTE', ROOT_PATH . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR);
}

