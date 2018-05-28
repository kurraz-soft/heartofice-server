<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Оружие оказывается в вашей руке раньше, чем
Боше успевает среагировать. Раздается выстрел, и заряд попадает ему прямо между глаз. Он умирает, так
и не успев понять, что происходит. Теперь ничто не
стоит между вами и Сердцем Волента.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 415);

});