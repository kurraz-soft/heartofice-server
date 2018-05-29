<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Дверь открывается, и вы заходите внутрь только
для того, чтобы вздрогнуть, когда она с лязгом захлопывается за вами. Вы заключены в маленькой кабине.
</p>
<p>
    Когда вы стучите по двери, снова раздается искусственный голос: «Запрошенный вами вариант не
предусмотрен. Пожалуйста, подождите здесь, пока
изучается запрос. Спасательная команда прибудет
в соответствии с установленным графиком».
</p>
<p>
    Спасательная команда? Здесь нет ни одной живой души более ста лет!
</p>
<?php if(!$this->character->hasSkill(\app\library\SkillsLibrary::STEALING)): ?>
<p>
    Вы в ловушке, и ваши останки пребудут
здесь вечно, пока полярные льды будут ползти все
дальше и дальше на юг и наконец погубят всю жизнь
на Земле.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING) ? 404 : 'end_empty');

});