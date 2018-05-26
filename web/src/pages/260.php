<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT)?4:6;
if($this->character->hasItem(\app\library\ItemsLibrary::CYBORG_PARTS))
    $spend_health--;
?>
<p>
    Раздается стук тяжелых лап насекомоподобного
существа по гладкому полу, и что-то огромное врезается в вас. Судя по ощущениям, это похожее на улитку
чудовище с телом, твердым как черное дерево. Вслепую отбиваясь, вы чувствуете, как ваш кулак расплющивает сегментированный глаз, выбивая слизь. Затем
оно хватает вас своими челюстями, и два острых лезвия впиваются в ваши бока. Вы издаете мучительный
крик. Кажется, монстр пытается перекусить вас пополам.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Вы вырываетесь с криком
ужаса и натыкаетесь на дверной проем. Боше и барон
захлопывают и запирают за вами дверь, и вы видите,
что она едва держится на петлях под яростными атаками монстра. «Надеюсь, она выдержит,— говорите
вы спутникам,— или мы пойдем на обед насекомому».
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0?281:'end_health');

});