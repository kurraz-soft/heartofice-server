<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы проходите мимо уличного писца, у которого
есть два древних ноутбука. Когда вы спрашиваете,
можно ли их использовать для связи с Глоси, он слабо
улыбается в ответ. Включив один из ноутбуков, он показывает на строчки тускло мерцающих зеленых букв,
которые появляются на экране.
</p>
<p>
    «Мой бизнес — это письма и контракты, а не компьютеры. Я использую их только как инструмент — так
же, как мои предшественники использовали глиняные
таблички, свитки папируса и перья».
</p>
<p>
    Вы осматриваете оборудование. «У них должны
быть периферийные устройства для связи с глобальной компьютерной сетью. Это не разъем для модема?»
</p>
<p>
    Писец присвистнул. «Точно. Однако я слышал
о парне, который соединил свой компьютер с Глоси,
и после этого он мог только перебирать простые числа. Я бы скорее дал заразить себя желтой оспой!»
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasSkill(\app\library\SkillsLibrary::CYBERNETIC) ? 265 : 372);

});