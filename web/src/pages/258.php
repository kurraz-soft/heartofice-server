<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Когда он скрещивает руки на груди и вещает
в своем немного причудливом стиле, он напоминает
вам священника. «Вайра Сингх — это лев среди нас,—
говорит он.— Попробуй встать у него на пути, и ты
не проживешь и нескольких секунд. Если Сингх —
это лев, то Голгот — это лис, ловкий и коварный. На
гербе барона Сириазиса я бы изобразил паука — это
злобное, зловещее создание себе на уме, всегда готовое раскинуть свои сети».
</p>
<p>
    «А Тадра Бей, очевидно, тигрица,— продолжаете
вы,— поскольку я никогда не видел женщины, такой
свирепой и вкрадчивой одновременно. Что насчет
Кайла Боше?»
</p>
<p>
    «Боше? — он презрительно фыркает,— это шакал… Нет, я думаю, это скорее тварь, навязавшаяся
на твою голову!»
</p>
<p>
    «А как насчет тебя, Янус Гаунт?» — перебивает
его резкий голос. Вы оборачиваетесь и видите Кайла Боше, неторопливо идущего по снегу. Он бросаетвзгляд из-под капюшона на толпу безмолвных ксомов.
«Возможно, ты червь в нашей компании? Тот самый,
что гложет изнутри?»
</p>
<p>
    Гаунт разворачивается и уходит прочь без ответа,
его ксомы бредут за ним, как лунатики. Боше хватает вас за руку и тащит обратно на главную площадь.
«Тебе надо быть осторожнее,— ворчит он.— Гаунт
мог убить тебя там и превратить в одного из своих
зомби. Тебе повезло, что я появился вовремя».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 104);

});