<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    У тебя нет того, что нужно, Гаунт»,— говорите
вы, рассматривая созвездия.— Ты слишком склонен
к размышлениям, слишком стремишься рассмотреть
все стороны проблемы. У тебя нет этого самого «ледяного сердца», которое делает человека безжалостным и успешным».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasKeyword(\app\library\KeywordsLibrary::GILGAMESH) ? 299 : 321);

});