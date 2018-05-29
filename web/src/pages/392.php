<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Боше смотрит на вас: «Ты тоже это слышал?»
</p>
<p>
    «Тише!» — говорите вы. Концентрируясь, вы прощупываете разум приближающегося, кем бы или чем
бы он ни был. Ваш мозг заполняется холодными неясными мыслями чужака. Но общий смысл ясен — это
разум охотящегося хищника. Он здесь, чтобы убить вас.
</p>
<p>
    Вы прекращаете исследование чужих мыслей
и припадаете к земле, напряженный и готовый к действию.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 433);

});