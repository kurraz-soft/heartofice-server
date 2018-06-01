<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Портрин Факс указывает вам на самодельную
кушетку и вы, смертельно уставший после длительного перехода через насыщенные испарениями болота,
с благодарностью укладываетесь и погружаетесь в сон.
</p>
<p>
    Кажется, что прошло всего лишь мгновение, когда он трясет вас, чтобы разбудить. Как только вы открываете глаза, он отпрыгивает с нервным смешком
и говорит: «С добрым утром».
</p>
<p>
    Вы зеваете и потягиваетесь. Воздух внутри здания кажется прохладным по сравнению с удушающей
жарой снаружи. «Утро? С чего ты взял?» — спрашиваете вы.
</p>
<p>
    Факс показывает на настенные часы над сводчатым проходом к лестнице, ведущей на подземный уровень. «Это единственный показатель. И хотя солнце
здесь никогда не заходит, оно двигается по небосводу.
На самом деле, временами мне казалось, что я вижу
два солнца».
</p>
<p>
    Несомненно, «второе солнце» это орбитальный
отражатель, предназначенный для фокусирования
солнечного света на эту область.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Попросите Факса показать, как он добывает еду', 378);
    $gamePage->addAnswer('Расспросить его о пустынном участке, который вы обнаружили по пути к его жилищу', 399);
    $gamePage->addAnswer('Уйти и поспешить на запад', 420);

});