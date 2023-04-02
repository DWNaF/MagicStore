<?php

class Logger {

    private static string $PASSWORD = "1234";

    public static function generateLogger($csrf_token) {
        ?>
        <form id="log_form" action="" method="post">
            <span><h2>Please login</h2></span>
            <input type="text" name="login" placeholder="Enter your login" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <!-- Ajouter le jeton CSRF en tant que champ caché -->
            <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
            <button type="submit">Login</button>
        </form>
        <?php
    }

    public static function log(?string $username, ?string $password) : bool {
        if ($password == self::$PASSWORD) {
            return true;
        }
        else {
            return false;
        }
    }

}