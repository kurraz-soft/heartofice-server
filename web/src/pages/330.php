<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Изумрудная тайна прекращает действие любых ретровирусов, которые вы уже применили.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->spendMoney(7);

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::CHAMELEON_SKIN))
        $gamePage->character->removeSkill(\app\library\SkillsLibrary::CHAMELEON_SKIN);

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::BIG_POWER_UP))
    {
        $gamePage->character->removeSkill(\app\library\SkillsLibrary::BIG_POWER_UP);
        $gamePage->character->healthMax -= 5;
        $gamePage->character->addHealth(0);
        if ($gamePage->character->hasSkill(\app\library\SkillsLibrary::SUPPRESSED_AGILITY))
        {
            $gamePage->character->removeSkill(\app\library\SkillsLibrary::SUPPRESSED_AGILITY);
            $gamePage->character->addSkill(\app\library\SkillsLibrary::AGILITY);
        }

    }

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::NIGHT_VISION))
    {
        $gamePage->character->removeSkill(\app\library\SkillsLibrary::NIGHT_VISION);
    }

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 434);

});