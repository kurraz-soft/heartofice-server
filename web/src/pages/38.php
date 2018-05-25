<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
   Когда спускается ночь, в небе появляется зловещий блеск огней, и полупрозрачный занавес как будто накрывает вселенную. Янус Гаунт смотрит вверх
и говорит вам, что это Аврора Кордис, явление, вызванное частицами из открытого космоса, которые
притягиваются полем радиации, излучаемой Сердцем Волента.
</p>
<p>
    Пораженный великолепным видом, вы застываете в благоговении. Световой занавес пульсирует и колеблется в небесах. «Мысль о том, что лишь часть мощи
Сердца может породить нечто столь масштабное, просто ошеломляет»,— шепчете вы Гаунту.
</p>
<p>
    Он усмехается. «Мощь Сердца гораздо больше!
Мощь, достаточная для того, чтобы создавать миры
и сдвигать звезды с их пути, если верить легенде».
</p>
<p>
    «И ты веришь в нее?»
</p>
<p>
    Он бросает на вас странный, полу-испуганный
взгляд. «Верю? Я изучал научные записи, я знаю это точно».
</p>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::URUK))
    {
        $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::URUK);
        $gamePage->character->addKeyword(\app\library\KeywordsLibrary::GILGAMESH);
    }
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        'Продолжить...',
        $gamePage->character->hasKeyword(\app\library\KeywordsLibrary::NEMESIS) ? 60 : 82
    );
});