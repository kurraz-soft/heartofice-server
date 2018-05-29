<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 2;
?>
<p>
    Иногда бризальный пистолет дает осечку. Обычно
это случается очень редко, но ваши сверхъестественные способности позволяют изменить шансы. Когда
Боше нажимает на курок, пистолет взрывается прямо
в его руках. Смерть наступает мгновенно, но и вам
не удается остаться невредимым — осколок попадает
вам в бедро. <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->addHealth(-$spend_health);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ?415:'end_health');

});