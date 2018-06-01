<?php
/**
 * @var \app\models\GamePage $this
 */

?>
<p>
    Вы распознаете все снадобья, детально описывая
их действие. Маленгин вытаскивает блокнот и быстро
записывает за вами. «Это бесценно!» — восклицает он,
настолько довольный, что соглашается продать ретровирусы со скидкой.
</p>
<p>
    Легче всего распознать снадобье, которое он называет Изумрудной тайной. Это антидот, предназначенный для отката нежелательных генетических изменений. К счастью, остальные снадобья куда более
полезны.
</p>
<p>
    Большой усилитель будет стоить для вас 7 скадов
и усилит вашу кожу, добавив 5 единиц Здоровья сверх
изначального уровня (таким образом, если вы начали
путешествие с 10 единицами, их предельное значениеувеличится до 15). Однако ретровирус замедлит ваши
рефлексы, поэтому вы потеряете умение Ловкость,
если оно у вас было.
</p>
<p>
    Маска затмения стоит 6 скадов и дает возможность изменять внешность и цвет кожи. Если вы приобретете этот ретровирус, отметьте на Листе персонажа характеристику «кожа хамелеона».
</p>
<p>
    Несравненный проницат стоит 4 скада и придает
способность видеть в полной темноте. Если вы купите
этот ретровирус, отметьте на Листе персонажа характеристику «ночное зрение».
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_BIG_POWER_UP) && $gamePage->character->money >= 7)
        $gamePage->addAnswer('Большой усилитель - 7 скадов', '266_1');

    if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_CHAMELEON_SKIN) && $gamePage->character->money >= 6)
        $gamePage->addAnswer('Маска затмения - 6 скадов', '266_2');

    if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::USED_RETROVIRUS_NIGHT_VISION) && $gamePage->character->money >= 4)
        $gamePage->addAnswer('Несравненный проницат - 4 скадов', '266_3');

        $gamePage->addAnswer('Закончить',
        ($gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE)
            || $gamePage->character->hasItem(\app\library\ItemsLibrary::GUIDEBOOK)) ? 414 : 25);

});