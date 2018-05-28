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

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        $gamePage->addAnswer('Продолжить...', 7);
    elseif($gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PARADOX_CONTROL))
        $gamePage->addAnswer('Продолжить...', 29);
    else
        $gamePage->addAnswer('Продолжить...', 52);

});