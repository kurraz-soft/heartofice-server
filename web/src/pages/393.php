<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 2;
if($this->character->hasItem(\app\library\ItemsLibrary::FUR_COAT) || $this->character->hasItem(\app\library\ItemsLibrary::WARM_CLOTH))
    $spend_health--;
if($this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
    $spend_health--;
if($this->character->hasItem(\app\library\ItemsLibrary::BURREK))
    $spend_health--;

$spend_health = max(0, $spend_health);
?>
<p>
    Неистовый ветер с ледяными иголками дует с несмолкающим шумом и несет с собой лавины снежной
пыли. Вы горбитесь после каждого шага, как будто
толкаете перед собой тяжелую тележку. Временами
приходится пригибаться к земле, чтобы вас не сбило
с ног ветром. Днем вы окружены ослепительно белым блеском, а ночью луна превращает пейзаж в таинственные неземные декорации. Вы тяжело ступаете
окоченевшими ногами, ваши брови покрыты сосульками.
</p>
<?php if($this->character->hasItem(\app\library\ItemsLibrary::BURREK)): ?>
<p>
    Вы прижаться к бурреку и согреваетесь теплом его тела.
</p>
<?php endif; ?>
<?php if($spend_health): ?>
<p>
    (-<?= $spend_health ?> здоровья)
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->addHealth(-$spend_health);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::POLARIZED_GLASSES))
        $gamePage->addAnswer('Продолжить...', 403);
    elseif($gamePage->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
        $gamePage->addAnswer('Продолжить...', 443);
    else
        $gamePage->addAnswer('Продолжить...', 13);

});