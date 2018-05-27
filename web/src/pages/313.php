<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Сейчас крайне редко можно увидеть где-то электрический свет. Обычно это означает, что рядом есть
угольный или дизельный генератор. Но Марсей был
заброшен больше двухсот лет назад, должно быть, тут
есть атомный источник энергии. Для его управления
нужны компьютеры, а значит, с их помощью можно
связаться с Глоси.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasSkill(\app\library\SkillsLibrary::CYBERNETIC) ? 335 : 356);

});