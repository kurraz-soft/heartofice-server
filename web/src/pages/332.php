<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Не остается ничего другого, кроме как отправиться пешком, огибая Внутреннее море, чтобы дойти до
Кахиры через Византий.
</p>
<p>
    Однако вам не суждено достичь своей цели. Когда вы пересекаете холмы к юго-востоку от Византия,
которые переходят в Анатолийское плато, вспышка
света рассекает небо с западной стороны. Кажется,
что титаническая ударная волна от ужасного взрыва
прокатилась по миру. Вы пытаетесь бежать, но время
и пространство вокруг вас похожи на воду. Вы падаете, и глядя вверх, видите огромное лицо далеко на
горизонте.
</p>
<p>
    «Я Вайра Сингх,— произносит голос внутри вашего сознания.— Теперь Сердце Волента принадлежит
мне, и я использую его, чтобы переделать все сущее
по своему усмотрению…»
</p>
<p>
    Мир исчезает. Поскольку вы сильно задержались,
мощь Сердца попала в руки другого человека. Ваше путешествие и сама Вселенная кончается здесь.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец', 'end_empty');

});