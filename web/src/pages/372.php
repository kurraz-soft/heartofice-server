<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    С вами заговаривает один из местных проводников, их называют «гондо», одетый в черный плащ. «Я
слышал, ты говорил о Глоси, друг. На окраине города
есть старая сокровищница, там много компьютеров
и других древних устройств. Она заброшена, люди
болтают, что там водятся привидения. Я могу отвести
тебя туда за пару скадов».
</p>
<p>
    После короткого торга это спонтанное предложение претворяется в сумму 3 скада.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Заплатить', 4, function ($e, \app\models\GamePage $gamePage){
        $gamePage->character->spendMoney(3);
    });
    $gamePage->addAnswer('Не платить', 26);

});