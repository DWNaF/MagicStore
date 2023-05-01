<?php

require_once __DIR__ . "/../config/config.php";

class Cart
{
    private ?array $cards = null;

    function __construct()
    {
        // récupérer les cartes depuis les cookies si existants
        if (isset($_COOKIE['cart'])) {
            $this->cards = json_decode($_COOKIE['cart'], true);
        } else {
            $this->cards = [];
        }
    }

    public function render()
    {
        if ($this->cards != null) {
            $cards = Browser::getCards($this->cards);
?>
            <div id="cards_container">
                <?php
                foreach ($cards as $card) {
                ?>
                    <div class="card">
                        <img src="<?= $card['image_uris']['normal'] ?>" alt="">
                        <div class="card_footer">
                            <legend><?= $card['name'] ?></legend>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
<?php
        }
    }
}
