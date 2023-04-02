<?php
require_once __DIR__ . "/../config/config.php";
ob_start();
$shop = new Shop();
?>

<div id="main_content">
    <h1>Magic cards</h1>
    <?php $shop->generateShop(); ?>
</div>

<?php
$content = ob_get_clean();
Template::render($content, "shop");
?>