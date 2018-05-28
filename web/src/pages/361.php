<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы спускаетесь с постамента. Из-за слабых, низко
наклоненных лучей солнца вы мерзнете больше, чем ночью.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasItem(\app\library\ItemsLibrary::AEROCAR_SCAT) ? 289 : 393);

});