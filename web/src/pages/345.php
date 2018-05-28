<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Странно видеть, как бризальный луч замедляется,
проходя в зону искажения времени: как будто раскаленная добела игла проникает сквозь лед. Когда луч
попадает в стазис-бомбу, раздается приглушенный
взрыв, и бомба разлетается на оплавленные куски.
В то же мгновение, человек делает пол-шага вперед
и затем резко отступает в изумлении, увидев вашу компанию, окружающую его.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 409);

});