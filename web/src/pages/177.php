<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Боше не в восторге. «В Лионессе полно бандитов
и ночных чудовищ»,— утверждает он.— Идти туда —
большой риск. К тому же, дальше придется перебираться через Атласские горы. Как твой друг я очень
прошу тебя передумать».
</p>
<p>
    Очевидно, он не собирается идти с вами на запад.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Все равно идти на запад', 221);
    $gamePage->addAnswer('Послушать его и выбрать дорогу в Венезию', 200);

});