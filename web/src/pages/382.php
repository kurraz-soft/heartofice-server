<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Риза рассказывает о возможности возвращения
на Землю. «Я вылетаю в Маку довольно скоро, и я мог
бы подбросить тебя до Судана. Правда, потом тебе
предстоит длительная прогулка оттуда до Дью-Эна».
</p>
<p>
    «А можешь подкинуть меня куда-нибудь поближе?»
</p>
<p>
    «Мы не можем рисковать пилотами. В Дью-Эне
могут стоять автоматические защитные турели, которые легко собьют машину. Если ты знаком с пилотированием, я могу предоставить тебе одноместный флаер, на котором ты мог бы приземлиться на расстоянии
восьмисот километров от Дью-Эна. Это самое близкое,
на что мы пойдем, не рискуя потерей транспорта».
</p>
<p>
    «Не совсем,— вставляет один из стоящих поблизости техников.— Есть способ доставить тебя прямо
в город. У нас есть экспериментальная модель телепорта».
</p>
<p>
    Риза пристально смотрит на техника, а затем поворачивается к вам: «Я бы не рекомендовал этот способ. Пока что мы экспериментировали только на мышах, и к тому же на довольно коротких расстояниях».
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Лететь с Ризой в Судан', 275);
    $gamePage->addAnswer('Рискнуть и телепортироваться',  424);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PILOTING))
        $gamePage->addAnswer('Взять одноместный флаер',  442);

});