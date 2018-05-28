<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Главный рынок Венезии располагается внутри
роскошной трехпалубной галеры, которая вызывающе возвышается над грязными улицами. Здесь, на
скамьях, на которых некогда гребцы выбивались из
сил над позолоченными веслами, сидят торговцы и зазывают посмотреть на свой товар. Когда покупатель
выказывает интерес, его ведут в принадлежащий торговцу магазин на одной из соседних улиц.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Обычные товары', 394);
    $gamePage->addAnswer('Оружие и другие устройства', 283);
    $gamePage->addAnswer('Подвергнуться генетическим улучшениям', 434);

});