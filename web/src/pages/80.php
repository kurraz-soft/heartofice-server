<?php
/**
 * @var \app\models\GamePage $this
 */
use app\library\ItemsLibrary;

?>
<p>
    Вы находите несколько предметов, разбросанных
на скамье в дальней части лаборатории. Здесь есть
фонарик, бинокль, поляризационные очки и бризальное ружье. Ружье разобрано, но закрепить приклад
и поставить на место винты довольно просто. Проверив магазин, вы обнаруживаете, что в нем осталось
два заряда.
</p>
<p class="font-italic">
    (+1 <?= ItemsLibrary::FLASHLIGHT ?>)
    <br />
    (+1 <?= ItemsLibrary::BINOCULARS ?>)
    <br />
    (+1 <?= ItemsLibrary::POLARIZED_GLASSES ?>)
    <br />
    (+1 <?= ItemsLibrary::RIFLE ?>)
    <br />
    (+2 <?= ItemsLibrary::RIFLE_AMMO ?>)
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->setInventoryItem(ItemsLibrary::FLASHLIGHT);
    $gamePage->character->setInventoryItem(ItemsLibrary::BINOCULARS);
    $gamePage->character->setInventoryItem(ItemsLibrary::POLARIZED_GLASSES);
    $gamePage->character->setInventoryItem(ItemsLibrary::RIFLE);
    $gamePage->character->setInventoryItem(ItemsLibrary::RIFLE_AMMO, 2);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Спуститься по шахте на нижний уровень', 255);
    $gamePage->addAnswer('Подняться наверх и покинуть пирамиду', 361);

});