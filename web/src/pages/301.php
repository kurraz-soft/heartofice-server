<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Что есть Истина?» загадочно спрашивает компьютер.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasKeyword(\app\library\KeywordsLibrary::MOON)?322:61);

});