<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы находите другой выступ, на этот раз без трупов, и очистив его от снега, устраиваетесь на ночь.
Боше бросает недовольный взгляд на скалы. «Как будто спим на кладбище»,— замечает он.
</p>
<p>
    Вы лишь пожимаете плечами. «Постарайся не думать об этом. По крайней мере, тут нет ветра».
</p>
<p>
    «И хищников»,— отвечает он. «Думаешь?» — усмехаетесь вы.
</p>
<p>
    Как только слабый дневной свет уступает место
ночи, на перевале начинается снежная буря. Звук
урагана похож на вой чудовища. Закутавшись в свою
куртку, вы пытаетесь уснуть, как вдруг слышите звук
шагов по снегу. Кто-то идет.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PSY))
        $gamePage->addAnswer('Продолжить...', 392);
    elseif($gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE))
        $gamePage->addAnswer('Продолжить...', 413);
    else
    {
        $gamePage->addAnswer('Подождать', 2);
        $gamePage->addAnswer('Напасть первым', 433);
    }

});