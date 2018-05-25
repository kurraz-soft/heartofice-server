<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Ты был хорошим спутником,— говорит Шандор,
широко улыбаясь и крепко пожимая вашу руку.— Я
уверен, что с твоей находчивостью тебе совершенно
не нужны мои советы, что делать в Венезии, так что
позволь предложить тебе кое-что другое».
</p>
<p>
    Он лезет в карман и достает денежный жетон,
который прикладывает к вашему и переводит 20 скадов. Вы было хотите возразить, но замечаете сумму,
оставшуюся у него на счете. Он может позволить себе
такую щедрость. <span class="font-italic">(+20 скадов)</span>
</p>
<p>
    Попрощавшись с Шандором и его людьми, вы направляетесь в Венезию.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->money += 20;

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::SHORT_SWORD)
        && $gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
    {
        $gamePage->addAnswer('Продолжить...', 8);
    }else
        $gamePage->addAnswer('Закончить', 334);
});