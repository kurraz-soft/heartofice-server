<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) ? 2 : 3;
?>
<p>
    Вы утомленно бредете вперед, часто проваливаясь почти по пояс в рыхлые сугробы. Солнце скупо
отдает слабые лучи света бледному небу, как старик,
трясущийся над своими пилюлями. Светло-серебристые полосы ледников, пересекающих скальные хребты, пролегают через пейзаж. Ночь приносит заморозки, от которых невозможно укрыться.
</p>
<p>
    Ваши испытания тянутся долгие дни, пока вы пересекаете суровые горные склоны и наконец начинаете спускаться в предгорья.
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    У вас вырывается хриплый
вздох облегчения сквозь обмороженные губы, когда
башни и купола Венезии наконец появляются на горизонте.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::SHORT_SWORD))
        $gamePage->addAnswer('Продолжить...', 8);
    else
        $gamePage->addAnswer('Продолжить...', 334);

});