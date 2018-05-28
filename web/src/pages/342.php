<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Правда доходит до вас вместе с леденящим ужасом: у вас изнуряющая болезнь. Она распространяется, мучая вас изнутри. Теперь к погоне за Сердцем
добавляется новый интерес, так как только обладая его могуществом, вы сможете излечиться от болезни.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::MEDPACK) || $gamePage->character->hasItem(\app\library\ItemsLibrary::AEROCAR_SCAT))
        $gamePage->addAnswer('Использовать аптечку', 257);
    else
        $gamePage->addAnswer('Продолжить...', 278);

});