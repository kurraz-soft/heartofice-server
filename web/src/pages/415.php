<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Щурясь в радиоактивном свечении Сердца, вы
с благоговением приближаетесь к нему. Это артефакт, созданный Большим взрывом, ключ к бесконечной власти. Много людей отдали свои жизни ради
шанса обладать им. Теперь Сердце находится от вас
на расстоянии вытянутой руки.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::NEMESIS) ? 153 : 174);

});