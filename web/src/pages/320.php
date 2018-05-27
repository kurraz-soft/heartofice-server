<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы глотаете пилюли и вскоре начинаете чувствовать себя гораздо лучше. Тем не менее, вы обессилены
после бессонной ночи. Снаружи, на главной площади
остальные готовятся к очередному дню исследования
руин. Напряженно размышляя о том, что ситуация
в любой момент может вылиться в открытое столкновение, вы осознаете, что вам понадобится предельная
концентрация. Непохоже, что ваши соперники найдут Сердце сегодня — вам лучше отдохнуть и собрать
силы для того, что предстоит дальше.
</p>
<?php if($this->character->hasItem(\app\library\ItemsLibrary::MEDPACK) || $this->character->hasItem(\app\library\ItemsLibrary::AEROCAR_SCAT) ) ?>
<p>
    (+1 здоровья)
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    $gamePage->character->addHealth(1);
    $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::SAND_CLOCK);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',  363);

});