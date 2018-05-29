<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 3;
?>
<p>
    Сингх отступает под вашей объединенной атакой. Он роняет мантрамукту, но в падении успевает
достать пистолет. Следующий выстрел Голгота прожигает нагрудник и попадает в сердце, но перед смертью он успевает нажать на курок. Заряд прожигает
вашу ногу.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->addHealth(-$spend_health);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ?431:'end_health');

});