<?php

class Browser
{

    private ?array $cards;

    function __construct()
    {
        $json = file_get_contents(__DIR__ . "/donnees/cards.json");
        $this->cards = json_decode($json, true);
    }


    function generateCards()
    {
        foreach ($this->cards as $card) {
?>
            <div class="card">
                <img src="<?= $card['image_uris']['normal'] ?>" alt="">
                <legend><?= $card['name'] ?></legend>
            </div>
<?php
        }
    }

    public static function getCards(array $id)
    {
        $json = file_get_contents(__DIR__ . "/donnees/cards.json");
        $data = json_decode($json, true);
        $cards = [];
        foreach ($data as $card) {
            if (in_array($card['id'], $id)) {
                $cards[] = $card;
            }
        }
        return $cards;
    }
}
