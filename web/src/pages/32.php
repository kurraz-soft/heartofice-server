<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Нужно решить что делать...
</p>

<?php

$this->attachDynamicAnswers(function ($event, \app\models\GamePage $gamePage){
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
    {
        $gamePage->addAnswer(
        'Драться с ними, используя Рукопашный бой',
        76
        );
    }
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN))
    {
        $gamePage->addAnswer(
        'Направить на них пистолет',
        98
        );
    }
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
    {
        $gamePage->addAnswer('Прибегнуть к Хитрости', 120);
    }

    $gamePage->addAnswer('Не связываться с ними', 54);
});