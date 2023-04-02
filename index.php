<?php

require_once __DIR__ . "/config/config.php";

ob_start();

$magic_logo = ASSETS_DIRECTORY . 'MagicLogo4.png';
?>

<div id="main_content_home">
    <div id="index_title">
        <?php
        session_start();
        if (isset($_SESSION["login"])) {
        ?>
            <h1>Hi <?= $_SESSION["login"] ?>,</h1>
        <?php
        }
        ?>
        <p>Welcome to the magic store</p>
    </div>
    <img src="<?= $magic_logo ?>" alt="Logo Magic">
</div>

<?php
$content = ob_get_clean();
Template::render($content, "index");
?>