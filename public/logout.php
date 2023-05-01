<?php
require_once __DIR__ . "/../config/config.php";

session_start();
session_destroy();
header("Location: " . REL_PATH . 'index.php');
exit();
