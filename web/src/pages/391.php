<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 2;
?>
<p>
    Ваш луч ударяет в повязку на голове Сингха. Откуда же вы могли знать, что украшения на ней — это
не просто побрякушки, а отражающие кристаллы? Выстрел отлетает обратно, взрывая бризальный пистолет
в вашей руке. Вы кричите от боли, поскольку руку
прожгло до кости. <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->addHealth(-$spend_health);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ?305:'end_health');

});