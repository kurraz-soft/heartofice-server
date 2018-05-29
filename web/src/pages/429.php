<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы слишком долго сомневались, обдумывая ответ.
Двери лифта открываются и застывают. Несколько
летающих дроидов разворачиваются в воздухе и летят к вам. За ними вы видите обгоревший труп, который несколько секунд назад был Тадрой Бей. Боше
и остальные, кажется, прорвались.
</p>
<p>
    Красные лучи наведения дроидов появляются на
вашей груди. Вы делаете шаг вперед. Лазеры воспламеняют воздух. Вскрикнув, вы падаете на пол. Ваше
приключение заканчивается здесь.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец','end_empty');

});