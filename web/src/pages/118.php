<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы резко вскакиваете и бросаетесь в подлесок.
Тварь неспеша следует за вами, победоносно крича
в ветвях где-то сверху. Она легко прокладывает себе
путь сквозь плотно стоящие стволы деревьев, периодически показываясь в просветах и паря на широких
кожистых крыльях.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
    {
        $gamePage->addAnswer('Продолжить...', 206);
    }elseif($gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE))
        $gamePage->addAnswer('Продолжить...', 140);
    else
        $gamePage->addAnswer('Продолжить...', 162);
});