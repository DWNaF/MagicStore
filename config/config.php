<?php

include "autoload.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
}

if (!defined('ABS_PATH')) {
    define('ABS_PATH', DIRECTORY_SEPARATOR . 'MagicStore' . DIRECTORY_SEPARATOR);
}

if (!defined('PUBLIC_PATH')) {
    define('PUBLIC_PATH', ABS_PATH . 'public' . DIRECTORY_SEPARATOR);
}

if (!defined('CSS_DIRECTORY')) {
    define('CSS_DIRECTORY', PUBLIC_PATH . 'css' . DIRECTORY_SEPARATOR);
}

if (!defined('ASSETS_DIRECTORY')) {
    define('ASSETS_DIRECTORY', CSS_DIRECTORY . 'assets' . DIRECTORY_SEPARATOR);
}
