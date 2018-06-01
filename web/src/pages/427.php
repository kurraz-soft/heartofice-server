<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Начинается громкий спор, но Гарганские близнецы видят, что вас невозможно переубедить. Наконец
Голгот, до этого момента остававшийся в стороне, решает вмешаться и говорит, повернувшись к сестрам:
«Я согласен, что робот разумен и поэтому может считаться членом группы. Вы можете принять это или покинуть нас».
</p>
<p>
    Гильгамеш все это время неподвижно простоял
в стороне. «Он действительно разумен, или наш разговор ничего не значит для него?» — спрашиваете вы
громко.
</p>
<p>
    Голгот пожимает плечами: «Какая разница? Я сказал это, чтобы уладить спор, и мы наконец могли отправиться в путь».
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',16);

});