<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
   Человек по имени Маленгин предлагает ретровирусы — концентраты, которые меняют ДНК, вызывая
устойчивые изменения в строении тела. Вы рассматриваете подборку, выложенную на переносном лотке Маленгина. Вам приходит в голову, что он подобен
волшебнику из старой сказки, алхимику, торгующему
вразнос сомнительными снадобьями.
</p>
<?php if(!$this->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE)): ?>
<p>
    У него есть следующие ретровирусы:<br />
    Большой усилитель — 10 скадов <br />
    Изумрудная тайна — 7 скадов <br />
    Маска затмения — 9 скадов <br />
    Несравненный проницат — 6 скадов <br />
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE))
        $gamePage->addAnswer('Распознать ретровирусы', 266);
    else
    {
        if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_BIG_POWER_UP) && $gamePage->character->money >= 10)
            $gamePage->addAnswer('Большой усилитель - 10 скадов', 308);

        if($gamePage->character->money >= 7)
            $gamePage->addAnswer('Изумрудная тайна - 7 скадов', 330);

        if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_CHAMELEON_SKIN) && $gamePage->character->money >= 9)
            $gamePage->addAnswer('Маска затмения - 9 скадов', 449);

        if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_NIGHT_VISION) && $gamePage->character->money >= 6)
            $gamePage->addAnswer('Несравненный проницат - 6 скадов', 287);

        $gamePage->addAnswer('Закончить',
        ($gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE)
            || $gamePage->character->hasItem(\app\library\ItemsLibrary::GUIDEBOOK)) ? 414 : 25);
    }
});