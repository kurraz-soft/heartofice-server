<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы вспоминаете катехизис, который Элезар Пикард бормотал на допросе после падения Дью-Эна.
Нет более подходящего пароля для высших жрецов,
чем основные принципы их веры. Если только вы сможете вспомнить точную формулировку…
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 18);

});