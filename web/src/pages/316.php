<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT) ? 2: 4;
?>
<p>
    Вы пробиваетесь сквозь сугробы, воющий ветер
толкает в спину. Воздух столь холодный, что каждый
вдох дерет горло, и ваши ноги скоро устают и начинают коченеть. Вы уже начинаете отчаиваться, когда находите скалистый выступ, который частично укрывает
вас от снежной бури. Вы валитесь под него в ожидании рассвета.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p
<?php if($this->character->health > $spend_health): ?>
<p>
    Вам удается
отбиться, убежать и скрыться за заколоченной досками дверью, когда они со злостью проносятся мимо,
преследуя вас. Вы слышите, как они удаляются в тумане. Хромая от болезненных ушибов, вы отправляетесь
поискать более безопасное место для ночлега.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 253 : 'end_health');

});