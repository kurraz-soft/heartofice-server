<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Орудуя гигантским клыком бомета, вырванным из
челюсти, вы разрезаете его толстую шкуру и добираетесь до мяса. Вам нужно только упаковать добычу
в рюкзак — она останется свежей при такой холодной
погоде.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 8);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 298);

});