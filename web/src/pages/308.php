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

    $gamePage->character->spendMoney(10);

    $gamePage->character->healthMax += 5;
    $gamePage->character->addHealth(5);
    $gamePage->character->addSkill(\app\library\SkillsLibrary::BIG_POWER_UP);
    $gamePage->character->removeSkill(\app\library\SkillsLibrary::AGILITY);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 434);

});