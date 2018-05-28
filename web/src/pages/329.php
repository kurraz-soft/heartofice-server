<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вам предстоит провести несколько дней в ожидании прибытия парома из Кахиры, поэтому у вас есть
время на то, чтобы подготовиться к дальнейшему путешествию. Вы прогуливаетесь по смотровой площадке с видом на игральные залы пресловутого Хазард
Стрип. Далеко внизу, на улице, которая когда-то была
самым крупным каналом, сверкающие неоновые огни
и громкая музыка разрушают спокойное величие ночной Венезии.
</p>
<p>
    У вас есть несколько вариантов.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Потратить свое время на попытку связаться с Глоси', 351);
    $gamePage->addAnswer('Узнать больше о Сердце Волента', 91);
    $gamePage->addAnswer('Поинтересоваться путешественниками, недавно пропавшими по пути в Венезию', 451);
    $gamePage->addAnswer('Отправиться собирать слухи о Кайле Боше', 179);
    $gamePage->addAnswer('Искать какие-нибудь особые приобретения для своего путешествия', 350);

});