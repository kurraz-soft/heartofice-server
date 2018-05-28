<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы прибываете на крышу и выходите на холодный ночной воздух. Туман, который поднимается над
рекой далеко внизу, превращается здесь в легкую мерцающую пелену. Прямо над вами, как алмазы сияют
звезды. Вы оглядываетесь и с радостью замечаете припаркованный на взлетной площадке аэрокар «Скат».
Если бы только его удалось завести.
</p>
<p>
    Фиджиец разгадал ваш замысел. Тяжело дыша и топая по ступенькам пожарной лестницы, он взлетает на крышу и появляется в опасной близости от вас.
«Последнее предупреждение! Стой на месте!»
</p>
<p>
    Кажется, он безоружен, хотя судя по его виду, он
может разорвать вас на куски голыми руками.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Попытаться перепрыгнуть на крышу соседнего здания(~8 метров)', 397);
    $gamePage->addAnswer('Попытаться сбежать на аэрокаре', 418);
    $gamePage->addAnswer('Остаться на месте и принять бой', 437);

});