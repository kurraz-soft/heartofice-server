<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Прогуливаясь по базару, вы обнаруживаете следующие предметы, выставленные на продажу:
</p>
<p>
    Противогаз — 15 скадов <br />
    Фонарик — 8 скадов<br />
    Аптечка — 8 скадов<br />
    Еда по 2 скада за одну порцию<br />
    Поляризационные очки — 6 скадов<br />
    Нейлоновая веревка — 3 скада<br />
</p>
<?php

$this->setScenario('shop');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::GAS_MASK, 1, 15, 1);
$inv->add(\app\library\ItemsLibrary::FLASHLIGHT, 1, 8, 1);
$inv->add(\app\library\ItemsLibrary::MEDPACK, 1, 8, 1);
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 1, 2, 5);
$inv->add(\app\library\ItemsLibrary::POLARIZED_GLASSES, 1, 6, 1);
$inv->add(\app\library\ItemsLibrary::ROPE, 1, 3, 1);

$this->params = [
    'shop' => $inv->toArray(),
    'takeItems' => (new \app\models\Inventory())->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasKeyword(\app\library\KeywordsLibrary::DIAMOND) ? 381 : 402);

});