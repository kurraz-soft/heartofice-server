<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Сингх больше привык использовать свою пушку,
чем легкий пистолет, поэтому вы оказываете на долю
секунды быстрей. Луч бризального пистолета разрезает воздух, и ваш враг без единого звука падает на
пол. Когда вы подходите, чтобы осмотреть тело, вы
с удивлением понимаете, что он мог сделать еще один
выстрел перед смертью.
</p>
<p>
    Тем не менее, он решил не стрелять. Почему?
Возможно, потому что ему показалось слишком мелочным мстить, когда вы победили его в честном бою. По
крайней мере, лучшего объяснения у вас нет. Сингх
умер так же, как и жил — с честью.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 415);

});