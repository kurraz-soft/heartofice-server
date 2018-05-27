<?php
/**
 * @var \app\models\GamePage $this
 */

?>
<p>
    Боше вскарабкался вверх по уступу и начинает
шарить по карманам трупов. «Я ни в коем роде не мародер, просто у них может быть еда»,— бормочет он.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        $gamePage->addAnswer('Продолжить...', 328);
    elseif($gamePage->character->hasSkill(\app\library\SkillsLibrary::PARADOX_CONTROL)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER))
        $gamePage->addAnswer('Продолжить...', 370);
    else
        $gamePage->addAnswer('Продолжить...', 306);

});