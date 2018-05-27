<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) ? 1: 2;
?>
<p>
    Вы пробиваетесь сквозь сугробы, воющий ветер
толкает в спину. Воздух столь холодный, что каждый
вдох дерет горло, и ваши ноги скоро устают и начинают коченеть. Вы уже начинаете отчаиваться, когда находите скалистый выступ, который частично укрывает
вас от снежной бури. Вы валитесь под него в ожидании рассвета.
</p>
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL)): ?>
<p>
    Вы откапываете в снегу нору для лучшей защиты от холода и ветра.
</p>
<?php endif; ?>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 393 : 'end_health');

});