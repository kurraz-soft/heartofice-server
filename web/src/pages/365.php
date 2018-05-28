<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Через стеклянную дверь вы видите, как Боше достает бумажку и читает с нее. Очевидно, компьютер
удовлетворен его ответом, потому что его лифт начинает опускаться. Вы знаете, что он сказал, поскольку
прочитали слова по губам. Теперь предстоит выяснить, сработают ли эти слова у вас.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 18);

});