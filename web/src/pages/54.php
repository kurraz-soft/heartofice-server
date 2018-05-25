<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы садитесь за стол. Близнецы смотрят на вас еще
мгновение, а потом возвращаются к выпивке. Вы осматриваете постоялый двор. Никто не смеет дать отпор
двум амазонкам.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        $gamePage->addAnswer('Подслушать', 208);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER))
        $gamePage->addAnswer('Прочитать их мысли', 230);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        $gamePage->addAnswer('Попытаться их обмануть', 120);
    if($gamePage->character->hasItem(\app\library\ItemsLibrary::GUN))
        $gamePage->addAnswer('Навести на них пистолет', 98);

    $gamePage->addAnswer('Думать о своих делах', 252);
});