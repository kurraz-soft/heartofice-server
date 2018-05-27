<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT) ? 5 : 9;
?>
<p>
    Вайра Сингх — офицер сикхов, человек с незапятнанной честью. У вас нет оружия, и он не опустится до того, чтобы использовать свое. Вместо этого он,
как и вы, будет драться голыми руками. Вы сразу понимаете, какой это могучий боец — вам чудом удаетсяувернуться, но вас повергает в ужас сила не попавшего в цель удара — он мог бы пробить каменную стену!
</p>
<p>
    Вы отскакиваете назад, единственный ваш шанс —
попробовать использовать преимущество в скорости
против грубой силы. Еще один сокрушительный удар
летит в вашу сторону. Когда его нога попадает вам
в грудь, Сингх издает торжествующий звериный рев,
вы слышите, как хрустят ребра, но вам все же удается
выстоять и даже нанести быструю серию ударов по
голове противника.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 415 : 'end_health');

});