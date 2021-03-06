<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы торопливо идете к концу улицы, где вас останавливает какой-то старик и спрашивает: «Сарко-отравитель еще работает?»
</p>
<p>
    «Откуда я знаю? — отвечаете вы.— Первый раз слышу это имя».
</p>
<p>
    Он смотрит на вас, как на сумасшедшего или лжеца. «Я только что видел, как ты вышел из его магазина!» — заявляет он.
</p>
<p>
    Вы уныло потираете подбородок. «Сарко-отравитель, вот как…» Кажется, вы чудом уцелели.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить попытки изменить ИД-карту', 245);
    $gamePage->addAnswer('Заняться другими делами, пока не прибыл паром в Кахиру', 414);

});