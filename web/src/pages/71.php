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

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PILOTING))
    {
        $gamePage->addAnswer('Продолжить...', 115);
    }else
        $gamePage->addAnswer('Продолжить...', 137);
});