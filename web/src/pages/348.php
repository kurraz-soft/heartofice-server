<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Броня Сингха расщепляет бризальный луч вашего
пистолета, а его ответный выстрел убивает вас мгновенно.
</p>
<p>
    Вы погибаете, зная, что победа была так близка.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец', 'end_empty');

});