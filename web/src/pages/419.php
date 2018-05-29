<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
Ужасающее завывание вырывается из горла незнакомца, от ужаса вы не в силах пошевелиться. Вы
едва видите, как он, приблизившись, сжимает бескровные пальцы вокруг вашего горла. Вы пытаетесь
освободиться, но от страха ваши мышцы окоченели.
Вы можете только слабо пнуть его, когда он поднимает вас над землей. Подобно фермеру, убивающему
цыпленка, он легко ломает вам шею. Теперь ваша свежая кровь будет питать жуткое существо, убившее вас.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец','end_empty');

});