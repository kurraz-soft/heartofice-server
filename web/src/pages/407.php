<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы совершили логическую ошибку. Барон Сириазис мгновенно обнаруживает вашу попытку ментального сканирования. Установив защиту своего разума,
он поднимается в воздух на потоках телекинетической
энергии и направляется прямо к вам.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 386);

});