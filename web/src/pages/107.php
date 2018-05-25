<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    ...
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::HAMMER))
        $gamePage->addAnswer('Продолжить...', 195, function ($e, \app\models\GamePage $gamePage) {
            $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::HAMMER);
        });
    else
        $gamePage->addAnswer('Продолжить...', 217);

});