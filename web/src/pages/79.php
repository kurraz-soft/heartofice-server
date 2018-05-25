<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Тонкий опаляющий луч проходит сквозь воздух,
прожигая ровную дырку в гигантской голове бомета.
Он издает глухое рычание, делает два неуверенных
шага по снегу и падает. Вы подбегаете к бомету убедиться, что он убит. Не хотелось бы, чтобы раненный
зверь преследовал вас в ночи.
</p>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 341);

});