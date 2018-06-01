<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Пристроившись за человеком в отделанном мехом красном шелковом плаще, вы показываете на море: «Это что, паром?»
</p>
<p>
    Он осматривается, вглядывается в ледяной туман,
заволакивающий береговую линию, и поворачивается, испепеляя вас взглядом. «Это чайка. Паром будет
только через полчаса». Он уходит прочь в своем великолепном плаще, не подозревая, что вы обчистили его
карманы, когда он отвлекся.
</p>
<p>
    Теперь у вас есть билет на паром.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 246);

});