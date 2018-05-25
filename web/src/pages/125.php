<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Наконец, вы видите полосу темного камня на сияющем горизонте. Вы опасаетесь, что это может быть
лишь цепь холмов или даже игра света, но по мере
того, как вы приближаетесь быстрым шагом, вы ясно
различаете надвигающиеся башни, пустые дворцы
и гигантские окруженные снегом стены.
</p>
<p>
   Вы прибыли в затерянный город Дью-Эн.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::DIAMOND))
        $gamePage->addAnswer('Продолжить...', 191, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::DIAMOND);
        });
    else
        $gamePage->addAnswer('Продолжить...', 213);

});