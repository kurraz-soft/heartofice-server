<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы продолжаете идти, наблюдая как на западе
медленно заходит солнце. Серебристый закат окаймляет горизонт. Насколько хватает глаз, простираются
бледные сугробы, впадины между которыми заполнены фиолетовыми тенями. Уловив краем глаза какое-то
движение, вы замираете, медленно поворачиваетесь
и видите огромного саблезубого бомета, поднимающегося во весь рост не более, чем в пятидесяти метрах
от вас. Вы крадетесь назад за глыбу льда, не зная, заметила ли вас эта тварь.
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::GILGAMESH))
    {
        $gamePage->addAnswer('Продолжить...', 123);
    }elseif($gamePage->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
    {
        $gamePage->addAnswer('Продолжить...', 256);
    }else
    {
        if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING)
            && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
            && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN_AMMO)
        )
        {
            $gamePage->addAnswer('Выстрелить из пистолета', 79);
        }
        if($gamePage->character->hasItem(\app\library\ItemsLibrary::SOUND_GRENADE))
        {
            $gamePage->addAnswer('Бросить в него шумовую гранату', 145);
        }
        $gamePage->addAnswer('Приблизиться к нему', 277);
        if($gamePage->character->hasItem(\app\library\ItemsLibrary::BINOCULARS))
        {
            $gamePage->addAnswer('Следить за ним с помощью бинокля', 319);
        }
        $gamePage->addAnswer('Уползти прочь, пока он вас не заметил', 298);
    }

});