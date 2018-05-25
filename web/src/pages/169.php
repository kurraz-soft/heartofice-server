<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Здешний воздух вполне терпим, если отфильтровать подземные испарения. Вы строите навес рядом
с бурлящим прудом под покровом карликовых хвойных деревьев. Хотя воду из пруда пить нельзя, вы без
труда собираете снег за пределами оазиса, чтобы растопить его в лагере. В пищу вы употребляете личинки
и насекомых, которых ловите и жарите на горячих
скалах.
</p>
<p>
    <span class="font-italic">(+4 здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addHealth(4);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 426);

});