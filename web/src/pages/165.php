<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    ...
</p>
<?php

//TODO сократить

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE))
    {
        $gamePage->addAnswer('Продолжить...', 187);
    }else
    {
        $gamePage->addAnswer('Расположиться на ночь в парке', 209);
        $gamePage->addAnswer('... на тихой боковой улице', 231);
        $gamePage->addAnswer('... на открытой полщади', 253);
    }

});