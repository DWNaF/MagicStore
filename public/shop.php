<?php
require_once __DIR__ . "/../config/config.php";
ob_start();
$shop = new Shop();
?>

<div id="main_content">
    <div id="header_content">
        <p>Selection : <span id="card_selection_nb">none</span></p>
        <button id="add_cart_btn" disabled>Add to cart !</button>
    </div>
    <?php $shop->generateShop(); ?>
</div>

<?php
$content = ob_get_clean();
Template::render($content, "shop");
?>