<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы одновременно выхватываете оружие.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING))
        $gamePage->addAnswer('Продолжить...', 327);
    else
    {
        $gamePage->addAnswer('Прицелиться ему в грудь', 348);
        $gamePage->addAnswer('... в горло', 369);
        $gamePage->addAnswer('... промеж глаз', 391);
    }

});