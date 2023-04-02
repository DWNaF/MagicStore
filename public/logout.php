<?php
require_once __DIR__ . "/../config/config.php";

session_start();
session_destroy();
header("Location: " . ABS_PATH . 'index.php');
exit();
