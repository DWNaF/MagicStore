<?php
require_once __DIR__ . "/../config/config.php";

class Shop {
    private ?array $cards;

    function __construct(){
        $json = file_get_contents(ROOT_PATH . 'magic' . DIRECTORY_SEPARATOR . 'donnees' . DIRECTORY_SEPARATOR . 'cards.json');
        $this->cards = json_decode($json, true);
    }

    public function generateShop() : void{
        ?>
        <div id="cards_container">
        <?php
        foreach ($this->cards as $card){
            ?>
            <div class="card">
                <img src="<?=$card['image_uris']['normal']?>" alt="">
                <div class="card_footer">
                    <legend><?= $card['name']?></legend>
                    <input class="card_checkbox" type="checkbox">
                </div>
            </div>
            <?php
        }
        ?></div><?php
    }
}