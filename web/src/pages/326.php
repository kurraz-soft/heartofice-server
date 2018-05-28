<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT) ? 3 : 5;
?>
<p>
    Голгот не теряет времени на перезарядку арбалета. Отбросив его в сторону, он вытаскивает нож
и надвигается на вас. Вы блокируете первый удар
ценой раны на предплечье, отвечая пинком, который
выводит его из равновесия.
</p>
<p>
    Бой короткий и ожесточенный. Голгот — профессиональный убийца.
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Вам удается выхватить нож и проткнуть его.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 72 : 'end_health');

});