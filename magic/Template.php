<?php
require_once __DIR__ . "/../config/config.php";

class Template
{
    public static function render($content, $page): void
    {
?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
            <link rel="icon" href="/tp4/style/assets/MagicLogo4.png" />
            <link rel="stylesheet" type='text/css' href="<?= CSS_DIRECTORY ?>template.css">
            <link rel="stylesheet" type='text/css' href="<?= CSS_DIRECTORY ?>style.css">
            <link rel="stylesheet" type='text/css' href="<?= CSS_DIRECTORY . $page ?>.css">
            <?php if ($page == "shop" || $page == "browse") { ?>
                <link rel="stylesheet" type='text/css' href="<?= CSS_DIRECTORY ?>cards.css">
            <?php }
            ?><title>Magic Store</title>
        </head>

        <body>
            <?php
            include(ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR . 'header.php');
            ?>

            <div class="flex main_container">
                <?php echo $content; ?>
            </div>

            <?php include(ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR . 'footer.php'); ?>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

        </body>

        </html>
<?php
    }
}

?>