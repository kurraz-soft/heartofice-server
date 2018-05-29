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

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasLoadedFirearm() && $gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING))
        $gamePage->addAnswer('Продолжить...',68);
    else
    {
        $ok = false;

        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        {
            $gamePage->addAnswer('Использовать Воровство',24);
            $ok = true;
        }
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
        {
            $gamePage->addAnswer('Использовать Хитрость',46);
            $ok = true;
        }

        if(!$ok)
            $gamePage->addAnswer('Продолжить...', 2);
    }

});