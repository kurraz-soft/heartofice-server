<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы торопитесь наружу, где вас ожидает гондо,
дрожащий под своим черным плащом, как одинокая
ворона. «Ну что, ты закончил?» — с надеждой спрашивает он.
</p>
<p>
    Вы киваете. «Возвращаемся в город».
</p>
<p>
    Солнце проглядывает на западе, сверкая как
красный прожектор в серо-белой мгле. К тому времени, как вы возвращаетесь в Венезию, опускается
ночь, и сильный холод затапливает узкие улицы. Вы
радуетесь огню в общем зале своей гостиницы. Завтра
должен прибыть паром.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 25);

});