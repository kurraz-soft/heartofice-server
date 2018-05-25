<?php
/**
 * @var \app\models\GamePage $this
 */
$health_loose = $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT ? 1 : 2);
?>
<p>
    Куклы запрограммированы драться друг с другом,
разыгрывая сцену эпической битвы. Но едва ли программисты ожидали, что зрители будут блуждать по
сцене во время представления. Уклониться от ударов
клинков практически невозможно. Предполагалось,
что мерцающий свет усилит сцену, добавит ощущение
стремительного движения и скроет замедленность
действий марионеток, но он сильно мешает проследить направление удара клинка.
</p>
<p>
    Наконец, вам удается пробиться через свалку
и спрыгнуть со сцены, однако при этом вы получаете
несколько неприятных порезов.
<span class="font-italic">(<?= -$health_loose ?> здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($health_loose) {

    $gamePage->character->addHealth($health_loose);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 110 : 'end_health');

});