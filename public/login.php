<?php

require_once __DIR__ . "/../config/config.php";

session_start();
ob_start();

if (!isset($_SESSION["login"])) {

    // ignorer un jeton CSRF unique et l'enregistrer dans la session
    if (!isset($_SESSION['csrf_token'])) {
        try {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        } catch (Exception $e) {
        }
    }

    Logger::generateLogger($_SESSION['csrf_token']);

    if (isset($_POST["login"]) && isset($_POST["password"])) {

        // Vérifier le jeton CSRF avant de valider les informations d'identification
        if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
            $granted = Logger::log($_POST["login"], $_POST["password"]);
            if ($granted) {
                $_SESSION["login"] = $_POST["login"];
                header("Location: " . ABS_PATH . 'index.php');
            }
        } else {
            // Le jeton CSRF est invalide
            header("Location: " . ABS_PATH . 'index.php');
        }
    }
} else {
    header("Location: " . ABS_PATH . 'index.php');
    exit();
}

$content = ob_get_clean();
Template::render($content, "login");
