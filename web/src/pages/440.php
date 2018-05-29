<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
   Самый величественный монумент — это пирамида
Хеопса, сооружение из гладкого черного камня, высотой в сто пятьдесят метров, с длинным постаментом,
ведущим к двери, повернутой на две трети к востоку.
Вы долго поднимаетесь, пар от дыхания вырывается
на холодный воздух. Наконец, вы подходите к тяжелой стальной двери. На металле отчеканен символ —
давно забытая эмблема, которая ничего не говорит
вам. Вокруг вершины пирамиды уныло воет ветер.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::HUMBABA))
        $gamePage->addAnswer('Продолжить...', 167);
    else
    {
        $ok = false;
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        {
            $ok = true;
            $gamePage->addAnswer('Использовать Воровство', 211);
        }
        if($gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PARADOX_CONTROL))
        {
            $ok = true;
            $gamePage->addAnswer('Использовать Управление Парадоксом', 189);
        }

        if(!$ok)
            $gamePage->addAnswer('Продолжить...', 361);
    }


});