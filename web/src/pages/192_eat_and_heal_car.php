<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы достаете из багажника аэрокара пачку еды и аптечку.
</p>
<p>
    Вы ужинаете и перевязываете раны...
</p>
<p class="font-italic">
    (+2 здоровья)
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addHealth(2);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', '192_1');

});