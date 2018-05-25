<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) ? 3 : 4;
if($this->character->hasItem(\app\library\ItemsLibrary::BURREK))
    $spend_health -= 2;
?>
<p>
    Как давно вы находитесь в Ледяных пустошах?
Вы потеряли счет времени. Ветер беспрестанно воет
в ваших ушах. Вы бредете через снегопад, каждый
вздох звучит, как всхлип боли.
</p>
<?php if($this->character->hasItem(\app\library\ItemsLibrary::BURREK)): ?>
<p>
    Вы в отчаянии убиваете Буррека ради его мяса
</p>
<?php endif ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::BURREK))
        $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::BURREK);

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 125 : 'end_health');

});