<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    У Голгота была та же самая идея. Вы оказываетесь с ним лицом к лицу на краю облака дыма. Вместо пистолета, он держит арбалет. Он стреляет, но
вы успеваете спрятаться, и болт вместо груди попадает в плечо.
</p>
<p class="font-italic">
    (-2 здоровья)
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addHealth(-2);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->health > 0)
    {
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING)
            && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
            && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN_AMMO))
        {
            $gamePage->addAnswer('Продолжить...', 304);
        }else
            $gamePage->addAnswer('Продолжить...', 326);
    }else
        $gamePage->addAnswer('Продолжить...', 'end_health');

});