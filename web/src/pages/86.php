<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
...
</p>

<?php
//TODO Сократить
$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER)
    )
        $gamePage->addAnswer('Продолжить...', 65);
    else
        $gamePage->addAnswer('Продолжить...', 240);

});