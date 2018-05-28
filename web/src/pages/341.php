<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы смотрите сверху вниз на огромную тушу, распластавшуюся в бледном лунном свете.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::SHORT_SWORD) || $gamePage->character->hasItem(\app\library\ItemsLibrary::KNIFE))
        $gamePage->addAnswer('Разделать тушу', 362);
    elseif($gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
        $gamePage->addAnswer('Продолжить...', 384);
    else
        $gamePage->addAnswer('Продолжить...', 298);

});