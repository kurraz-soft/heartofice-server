<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Коридор приводит вас к ряду галерей, которые
расходятся во все стороны от центрального зала,
освещенного мягким светом люстр; каждая галерея
заканчивается кельей. Многие тяжелые опоры повреждены, обломки каменной кладки разбросаны по
мраморному полу. «Несомненно, эти разрушения —
результат городских волнений,— приглушенно говорит Боше.— Говорят, население Дью-Эна сошло с ума
и обратилось против своих правителей».
</p>
<p>
    Барон Сириазис скользит вперед и вглядывается
в темноту уединенного прохода в одной из стен зала.
«Я чувствую чье-то присутствие,— говорит он, после
минутной концентрации.— Кто-то преследует нас».
</p>
<p>
    Ускорив шаги, вы быстро проходите по галереям
и упираетесь в тяжелую железную дверь, закрывающую дверной проем впереди. Из келий сбоку раздается скрежет. Он звучит, как будто хитиновый покров скользит по камню. Вы уже готовы броситься бежать,
когда гаснет свет, и вы проваливаетесь в темноту.
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::NIGHT_VISION))
        $gamePage->addAnswer('Продолжить...', 302);
    else
    {
        $ok = false;
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
        {
            $ok = true;
            $gamePage->addAnswer('Использовать Воровство', 216);
        }

        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING)
            && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
            && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN_AMMO)
        )
        {
            $ok = true;
            $gamePage->addAnswer('Использовать пистолет', 216);
        }
        if($gamePage->character->hasItem(\app\library\ItemsLibrary::FLASHLIGHT)
            || $gamePage->character->hasItem(\app\library\ItemsLibrary::LAMP))
        {
            $ok = true;
            $gamePage->addAnswer('Использовать фонарик или лампу', 172);
        }

        if(!$ok)
        {
            $gamePage->addAnswer('Продолжить...', 260);
        }
    }
});