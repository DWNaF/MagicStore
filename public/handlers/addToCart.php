<?php

$data = json_decode(file_get_contents('php://input'), true);

// Vérifier si le cookie existe et qu'il contient déjà des éléments
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
} else {
    // Si le cookie n'existe pas, initialiser un nouvel array
    $cart = array();
}

// Ajouter les nouveaux IDs à l'array existant
foreach ($data as $id) {
    $cart[] = $id;
}

// Enregistrer le nouvel array dans le cookie avec une durée de vie de 30 jours
setcookie('cart', json_encode($cart), time() + (30 * 24 * 60 * 60), '/');

header("Location: ../cart.php");
exit();
