<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Возможно, одно из ваших умений поможет вам
проникнуть на паром.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::DIAMOND);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PILOTING)
        || $gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING)
        || $gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
    {
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PILOTING))
            $gamePage->addAnswer('Использовать Пилотрование', 309);
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
            $gamePage->addAnswer('Использовать Воровство', 331);
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
            $gamePage->addAnswer('Прибегнуть к Хитрости', 226);
    }else
        $gamePage->addAnswer('Продолжить...', 352);

});