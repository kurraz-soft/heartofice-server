<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) ? 1 : 2;
?>
<p>
    Ночь застает вас на склоне горы. Вам приходится
копать снег, чтобы сделать импровизированное убежище, но даже в нем ветер пронизывает вас до костей.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Утро заливает мрачным серым светом закрытое
облаками небо. Восстановив кровообращение в затекших конечностях, вы направляетесь к Венезии.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health>0?199:'end_health');

});