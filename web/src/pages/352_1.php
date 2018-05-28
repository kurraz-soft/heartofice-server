<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    ...
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->money >= 10)
        $gamePage->addAnswer('Купить билет на паром', 246, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->spendMoney(10);
        });
    else
        $gamePage->addAnswer('Продолжить...', 332);

});