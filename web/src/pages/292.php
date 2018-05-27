<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    В Лионессе с его вечным солнечным светом
и влажностью смена дня и ночи не заметна. Вы находите место для отдыха, и проснувшись, обнаруживаете,
что золотые лучи падают под низким углом. Плотная
осязаемая тьма лежит между толстыми мясистыми листьями. Роятся и кружатся насекомые. Пока вы спали,
вас искусали комары, поэтому собираясь в дорогу, вы ожесточенно расчесываете укусы.
</p>
<p>
    Зуд от укусов насекомых — необычное ощущение
для живущих во времена Ледникового периода. Так
же, как и апатия, вызываемая жарой. Вам не терпится
оставить знойные джунгли позади.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 420);

});