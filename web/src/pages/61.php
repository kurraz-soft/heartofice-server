<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Нужно что-то предпринять...
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $has_psy = $gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY) && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER);

    if($has_psy)
        $gamePage->addAnswer('Использовать ПСИ навык', 344);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        $gamePage->addAnswer('Использовать навык Воровства', 365);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE))
        $gamePage->addAnswer('Использовать Знания', 387);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::CYBERNETIC) && $gamePage->character->hasItem(\app\library\ItemsLibrary::MINI_GLOSY))
        $gamePage->addAnswer('Использовать Мини-Глоси', 408);

    $gamePage->addAnswer('Ничего', 429);

});