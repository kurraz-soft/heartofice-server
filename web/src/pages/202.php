<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Очередь медленно продвигается, и вы наконец
подходите к билетной кассе. Скучающий служащий
в форме Торговой гильдии Венезии смотрит на вас из
зарешеченного окошка. «Билет до Кахиры стоит 10
скадов»,— говорит он.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Заплатить', 246, function ($e, \app\models\GamePage $gamePage){

        $gamePage->character->spendMoney(10);

    });
    $gamePage->addAnswer('Не платить', 288);

});