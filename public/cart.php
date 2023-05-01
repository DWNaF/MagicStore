<?php

require_once "../config/config.php";
ob_start();
$cart = new Cart();
?>

<div id="main_content">
    <h1>Magic cards</h1>
    <div id="cards_container">
        <?php $cart->render() ?>;
    </div>
</div>

<?php
$content = ob_get_clean();
Template::render($content, "cart");
?>