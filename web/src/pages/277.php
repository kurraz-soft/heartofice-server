<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 5;
?>
<p>
    Бомет сидит на возвышении как сфинкс, его голова обращена к звездному небу. Облака пара вырываются из ноздрей. Он не подозревает о вашем присутствии. Вы медленно прокладываете путь по большой
дуге и заходите с подветренной стороны. Но когда
вы, преодолев последние метры, прыгаете из-за сугроба, он с рычанием поднимается и клацает длинными
кривыми клыками. Только теперь, когда бомет разъяряется перед схваткой, вы начинаете понимать, с кем
связались. Мощь мутанта, помноженная на его размеры, вызывает крупную дрожь в коленях. Животное,
должно быть, весит не меньше полутонны.
</p>
<p>
    Жесткое и кровавое сражение заканчивается быстро.
</p>
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT)): ?>
<p>
    <span class="font-italic">(-<?= $spend_health ?> Здоровья)</span>
</p>
<?php else: ?>
<p>
    Без Рукопашного боя у вас нет шансов: Бомет погружает зубы глубоко в вашу грудную клетку, разламывая ребра и превращая легкие в кашу.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT) && $gamePage->character->health > 0)
        $gamePage->addAnswer('Продолжить...', 341);
    else
        $gamePage->addAnswer('Это конец', 'end_empty');

});