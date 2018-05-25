<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы не можете обнаружить источник мыслей в соседней комнате. Или вам почудилось, или говоривший
был тем, чьи мысли вы не можете прочитать.
</p>
<p>
    «Скорее!» — снова раздается голос.— Времени мало…»
</p>
<?php

$this->attachDynamicAnswers(function ($event, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        'Проигнорировать голос и отправиться обследовать аэрокар "Скат"',
        49
    );
    $gamePage->addAnswer(
        'Пройти в следующую комнату',
        5
    );
    $gamePage->addAnswer(
        'Побыстрее убраться отсюда',
        395
    );
});

?>
