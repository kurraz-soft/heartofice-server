<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::PILOTING)): ?>
    Вам удается завести двигатели, и вы поднимаетесь со взлетной
площадки в ореоле белого огня, рвущегося из сопла.
<?php else: ?>
    Вам не удастся взлететь вовремя, до того как фиджиец схватит вас.
<?php endif; ?>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',$gamePage->character->hasSkill(\app\library\SkillsLibrary::PILOTING) ? 218 : 437);

});