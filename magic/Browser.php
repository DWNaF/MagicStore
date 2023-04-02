<?php

class Browser{

    private ?array $cards;

    function __construct(){
        $json = file_get_contents(__DIR__ . "/donnees/cards.json");
        $this->cards = json_decode($json, true);
    }


    function generateCards(){
        foreach ($this->cards as $card){
            ?>
            <div class="card">
                <img src="<?=$card['image_uris']['normal']?>" alt="">
                <legend><?= $card['name']?></legend>
            </div>
            <?php
        }
    }

}
