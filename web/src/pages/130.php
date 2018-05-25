<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Выстрел был уловкой! Сканируя мысли Голгота,
вы в смятении видите, как он бесшумно подбегает
к вам сквозь дым. Взгляд его блещет ледяным металлом бездушного убийцы. Интуитивно вскинув руку, вы
направляете взрыв смертельной энергии прямо ему
в сердце, и он падает у ваших ног.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    //TODO ???

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 72);

});