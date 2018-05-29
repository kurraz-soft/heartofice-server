<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Кофейни тянутся в ряд по сторонам площади.
В них вы узнаете, что барон Сириазис — частый гость
в Кахире. «Безногий?» — говорит человек в кепи
и с жезлом городской милиции.— Да, он член Общества компаса. Я слышал, что он один из пси-лордов
Византия».
</p>
<p>
    Византий — бывший Стамбул — пострадал от
страшной бомбардировки необычным излучением
во время Войны парадокса. Когда выпадение радиоактивных осадков прекратилось, и город снова стал
обитаемым, выяснилось, что псионика действует там
с повышенной силой.
</p>
<p>
    Те, кто обладали пси-способностями, вскоре стали потомственными правителями Византия, эта группа
отличалась высокомерием и пренебрежением к обычному человеческому стаду. Барон Сириазис один из них.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', \app\library\SkillsLibrary::STREET_KNOWLEDGE ? 95 : 311);

});