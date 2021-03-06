<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
   «Наблюдение за Дью-Эном ведется из Военного
зала на первом уровне»,— отвечает голос.— Сообщается о незначительной активности. Население Дью-Эна в данный момент только по данным сканирования
поверхности составляет примерно четыре человека».
</p>
<p>
    Любопытно. Вы думали, что Дью-Эн полностью
заброшен. Кто там может быть? Есть только один вариант, мрачно думаете вы — другие претенденты на
Сердце Волента. Следует поторопиться, если вы хотите вовремя прибыть в Дью-Эн.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Спросить о Глоси', 297);
    $gamePage->addAnswer('Спросить о Гильгамеше', 318);
    $gamePage->addAnswer('Спросить о Сердце Волента', 383);
    $gamePage->addAnswer('Подняться на исследовательский уровень', 276);
    $gamePage->addAnswer('Уйти', 361);

});