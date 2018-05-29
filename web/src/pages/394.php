<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Изучив ассортимент товаров, выложенных на рыночных прилавках, вы торгуетесь, пока не удается согласовать следующие цены:
</p>
<p>
    Еда — 2 скада за каждую единицу<br />
    Веревка — 2 скада<br />
    Лампа — 3 скада<br />
    Аптечка — 12 скадов<br />
</p>
<?php

$this->setScenario('shop');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::ROPE, 1, 2, 1);
$inv->add(\app\library\ItemsLibrary::LAMP, 1, 3, 1);
$inv->add(\app\library\ItemsLibrary::MEDPACK, 1, 12, 1);
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 1, 2, 8);

$this->params = [
    'shop' => $inv->toArray(),
    'takeItems' => (new \app\models\Inventory())->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Купить или продать оружие или другие необычные предметы', 283);
    $gamePage->addAnswer('Заплатить за генетические улучшения', 434);
    $gamePage->addAnswer('Закончить с покупками', $gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE)?414:25);

});