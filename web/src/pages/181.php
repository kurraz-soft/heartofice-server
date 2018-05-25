<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Нужно решить что делать...
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Разыскать Кайла Боше и рассказать ему, что добыли аэрокар', 203);
    $gamePage->addAnswer('Продолжить...', 159, function ($e, \app\models\GamePage $gamePage){

        $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::DIAMOND);

    });

});