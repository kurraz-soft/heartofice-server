<?php
/**
 * @var \app\models\GamePage $this
 */
use app\library\ItemsLibrary;
?>
<p>
    Вы выкладываете содержимое хранилища на пол
рядом с машиной. Здесь 10 упаковок с едой, аптечка,
фонарик, зимняя одежда и моток нейлоновой веревки.
</p>
<p class="font-italic">
    (+10 <?= ItemsLibrary::FOOD_PACK ?>)
    <br />
    (+1 <?= ItemsLibrary::MEDPACK ?>)
    <br />
    (+1 <?= ItemsLibrary::FLASHLIGHT ?>)
    <br />
    (+1 <?= ItemsLibrary::WARM_CLOTH ?>)
    <br />
    (+1 <?= ItemsLibrary::ROPE ?>)
    <br />
</p>

<?php

$ground = new \app\models\Inventory();
$ground->add(\app\library\ItemsLibrary::FOOD_PACK, 1,0,10);
$ground->add(\app\library\ItemsLibrary::MEDPACK);
$ground->add(\app\library\ItemsLibrary::FLASHLIGHT);
$ground->add(\app\library\ItemsLibrary::WARM_CLOTH);
$ground->add(\app\library\ItemsLibrary::ROPE);

$this->setScenario('takeItems');

$this->params = [
    'takeItems' => $ground->toArray(),
];

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    
    $gamePage->addAnswer('Продолжить...', 395);

});