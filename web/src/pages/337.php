<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Выслушав вопрос, он некоторое время пристально смотрит на вас: «Гиза была военной базой в нескольких километрах к западу отсюда. В древние времена там было место погребения. В любом случае,
теперь там все заброшено. И запрещено. Рекомендую
тебе держаться подальше от этого места».
</p>
<p>
    Боше хватает вас за руку. «Извини,— говорит он
Голготу,— но у нас дело в Кахире, и я не хочу растрачивать время понапрасну».
</p>
<p>
    Голгот смеется: «Боше, ты тратишь время понапрасну каждый раз, когда открываешь рот!»
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::HUMBABA);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 358);

});