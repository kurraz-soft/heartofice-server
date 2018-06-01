<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT) ? 5 : 9;
?>
<p>
    Этот ретровирус усиливает вашу кожу, поэтому вы получаете 5
единиц Здоровья сверх изначального уровня
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->spendMoney(7);

    $gamePage->character->healthMax += 5;
    $gamePage->character->addHealth(5);
    $gamePage->character->addSkill(\app\library\SkillsLibrary::BIG_POWER_UP);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::AGILITY))
    {
        $gamePage->character->removeSkill(\app\library\SkillsLibrary::AGILITY);
        $gamePage->character->addSkill(\app\library\SkillsLibrary::SUPPRESSED_AGILITY);
    }
    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_BIG_POWER_UP);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 266);

});