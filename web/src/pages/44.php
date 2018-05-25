<?php
/**
 * @var \app\models\GamePage $this
 */

$h = $this->character->health;
$h -= $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT)?-1:-3;
?>
<p>
    Кулак Гарган четырнадцатой врезается в вашу
голову, отбрасывая вас к стене.
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT)): ?>
<span class="font-italic">(-1 Здоровья)</span>
<?php else: ?>
<span class="font-italic">(-3 Здоровья)</span>
<?php endif; ?>
</p>
<?php if($h > 0): ?>
<p>
    Когда вы
приходите в себя, полный решимости вступить в бой,
то видите, как Гарган тринадцатая, заносит нож над
Голготом, но медлит. Он, широко улыбаясь, переводит взгляд с ее лица на голень и обратно.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    $gamePage->character->addHealth($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT)?-1:-3);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 154 : 'end_health');
});