<?php
require_once __DIR__ . "/../config/config.php";

if (session_status() != PHP_SESSION_ACTIVE) session_start();
?>

<header>
    <nav id="test" class="flex">
        <div class="nav_left">
            <a href="<?= REL_PATH . 'index.php' ?>">
                <h2>Magic Store</h2>
            </a>
            <?php
            if (isset($_SESSION["login"])) {
            ?>
                <a href="<?= PUBLIC_PATH ?>shop.php">Shop</a>
            <?php
            } else {
            ?>
                <a href="<?= PUBLIC_PATH ?>browse.php">Browse</a>
            <?php
            }
            ?>
        </div>
        <div class="nav_right">
            <?php
            if (!isset($_SESSION["login"])) {
            ?>
                <a href="<?= PUBLIC_PATH . 'login.php' ?>">Login</a>
            <?php
            } else {
            ?>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION["login"] ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="<?= PUBLIC_PATH ?>logout.php" class="dropdown-item">Logout</a></li>
                    </ul>
                </div>
            <?php
            }
            ?>
        </div>

    </nav>
</header>