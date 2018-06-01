<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) ? 1 : 2;
?>
<p>
    Этот ретровирус
дает вам возможность видеть в абсолютной темноте.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->spendMoney(4);
    $gamePage->character->addSkill(\app\library\SkillsLibrary::NIGHT_VISION);
    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_NIGHT_VISION);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 266);

});