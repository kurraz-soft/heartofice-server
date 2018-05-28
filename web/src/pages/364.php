<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    ...
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PSY))
        $gamePage->addAnswer('Проникнуть в разум барона', 407);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING) || $gamePage->character->hasSkill(\app\library\SkillsLibrary::CHAMELEON_SKIN))
        $gamePage->addAnswer('Подкрасться ближе', 428);
    if($gamePage->character->hasItem(\app\library\ItemsLibrary::MINI_GLOSY))
        $gamePage->addAnswer('Оставить Мини-Глоси, чтобы записать слова барона', 446);


    $gamePage->addAnswer('Уйти, лечь спать', 192);
    $gamePage->addAnswer('Уйти. Попытаться поговорить с Боше', 104);
    $gamePage->addAnswer('... с Голготом', 126);
    $gamePage->addAnswer('... с Гаунтом', 148);

});