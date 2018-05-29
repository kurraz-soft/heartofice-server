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
<?php

//TODO rework

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE))
        $gamePage->addAnswer('Распознать ретровирусы', 266);


});