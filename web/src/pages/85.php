<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Мозг догоняет вас. Его единственный глаз упирается в вас, испепеляя вашу душу, как линза, собравшая лучи солнца. Ваши вены и артерии как будто наполняются ледяной водой.
Чужие мысли вторгаются в ваш разум. Вы вступили в телепатическое сражение
за свое собственное тело!
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY)
        && $gamePage->character->hasSkill(\app\library\SkillsLibrary::PARADOX_CONTROL)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER)
    )
        $gamePage->addAnswer('Продолжить...', 151);
    else
        $gamePage->addAnswer('Продолжить...', 'end_85');

});