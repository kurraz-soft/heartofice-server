<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    После пятнадцати минут тщательных поисков вы
находите тайник под одной из лежанок в соседней
комнате. Он открывается от вашего прикосновения,
и вы видите декоративный нож. Совершенно непонятно, зачем владелец ножа так старался спрятать его.
«Все волентийцы были больные на голову,— пренебрежительно говорит Боше.— Если бы ты был Верховным жрецом, ты бы позволил им держать при себе
острые предметы?»
</p>
<p>
    Барон Сириазис скользит над поломанной мебелью и смотрит на нож. «Возможно, послушникам
вообще не разрешали иметь личные вещи,— говорит
он.— Смысл их совместного пребывания здесь был
в том, чтобы сконцентрироваться на духовности. Ладно, если ты закончил искать сувениры, давайте продолжать путь».
</p>
<p>
    Вернувшись в вестибюль, вы должны решить:
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Пойти по левому коридору',3);
    $gamePage->addAnswer('Пойти по правому коридору',128);

});