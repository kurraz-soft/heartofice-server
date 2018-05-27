<?php
/**
 * @var \app\models\GamePage $this
 */
$this->setScenario('shop');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::GUN, 2, 5, 2);
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 10, 2, 5);

//TODO implement in frontend
$shopBuy = new \app\models\Inventory();
$shopBuy->add(\app\library\ItemsLibrary::GUN, 6, 8);
$shopBuy->add(\app\library\ItemsLibrary::PSY_FOCUSER,1,9);

$this->params = [
    'shop' => $inv->toArray(),
    'takeItems' => (new \app\models\Inventory())->toArray(),
    'shopBuy' => $shopBuy->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    $gamePage->character = new \app\models\Character(\app\library\CharactersLibrary::CHARACTERS[\app\library\CharactersLibrary::EXPLORER]);
});
?>

<p>
    ////////TEST
</p>
<p>
    Можно что-то купить
</p>