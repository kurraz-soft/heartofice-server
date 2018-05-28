<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasItem(\app\library\ItemsLibrary::BULLETPROOF_VEST) ? 2 : 3;
?>
<p>
    Вы выхватываете из-за пояса нож и швыряете его
в Боше. Он вонзается вашему врагу прямо в горло,
но падая на пол, он все же делает свой последний
выстрел. К счастью, луч, метящий вам в сердце, лишь
цепляет плечо.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 415 : 'end_health');

});