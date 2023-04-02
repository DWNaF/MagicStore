<?php

require_once "../config/config.php";
ob_start();
$browser = new Browser();
?>

<div id="main_content">
    <h1>Magic cards</h1>
    <div id="cards_container">
        <?php $browser->generateCards() ?>;
    </div>
</div>

<?php
$content = ob_get_clean();
Template::render($content, "browse");
?>