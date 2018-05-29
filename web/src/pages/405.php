<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    ...
</p>
<?php

//TODO сократить

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
        $gamePage->addAnswer('Продолжить...', 58);
    elseif($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::GILGAMESH))
        $gamePage->addAnswer('Продолжить...', 81);
    else
        $gamePage->addAnswer('Продолжить...', 103);

});