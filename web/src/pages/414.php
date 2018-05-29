<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    ...
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

//TODO Помните, что если у вас есть путеводитель, то вы можете использовать Знание улиц, находясь в Венезии.

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Предпринять попытку связаться с Глоси ',351);
    $gamePage->addAnswer('Изучить легенду о Сердце Волента',91);
    $gamePage->addAnswer('Приобрести запасы для вашего путешествия',350);
    $gamePage->addAnswer('Выяснить прошлое Кайла Боше ',179);
    $gamePage->addAnswer('Разузнать, не пропадали ли недавно в Апеннинах какие-нибудь путешественники ',451);
    $gamePage->addAnswer('Покинуть город',25);

});