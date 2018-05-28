<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Хотя компьютеры, управляющие системой электроснабжения, должны работать, вы понимаете, что
они не соединены с Глоси. Она слишком непостоянная и порывистая, чтобы выполнять такую задачу на
протяжении двух столетий. Но если вы найдете компьютеры, возможно, вам удастся установить с ней связь
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 356);

});