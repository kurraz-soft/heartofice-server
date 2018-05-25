<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Нужно решить что делать...
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if(
        $gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY)
            && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER)
    )
        $gamePage->addAnswer(
            'Воспользоваться пси-фокусировщиком',
            130
        );
    else
    {
        $gamePage->addAnswer('Продолжить...', 240);
    }
});