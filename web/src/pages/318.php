<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    ...
</p>
<?php

//TODO сократить?

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',  $gamePage->character->hasKeyword(\app\library\KeywordsLibrary::GILGAMESH) ? 340 : 425);

});