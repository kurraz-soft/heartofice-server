<?php
/**
 * @var \app\models\GamePage $this
 */
$health_loose = $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT ? 3 : 5);
?>
<p>
    Выстрел был приманкой! Читая мысли Голгота,
вы останавливаетесь и чувствуете, как он подкрадывается к вам под покровом дыма. В руке он держит
нож, и взгляд его холоден, как смерть. Вы отражаете
первый удар, но он все же глубоко ранит вас в предплечье. Вы отвечаете ударом локтя в голову, оглушая
противника.
</p>
<p>
    Бой короток и жесток. Голгот — мастер смертоносных техник.
    <span class="font-italic">(<?= -$health_loose ?> здоровья)</span>
</p>
<?php if($this->character->health > $health_loose): ?>
<p>
    Вам наконец удается повернуть ситуацию в свою пользу и пронзить его ножом.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($health_loose) {

    $gamePage->character->addHealth($health_loose);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 72 : 'end_health');

});