<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
Выстрелить ...
</p>
<?php

$this->attachDynamicAnswers(function ($event, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        '... в Голгота',
        109
    );
    $gamePage->addAnswer(
        '... в Боше',
        87
    );
    $gamePage->addAnswer(
        '... в Вайру Сингха',
        131
    );
});

?>
