<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Бадор выпячивает подбородок и чешет кустистую
седую бороду — он хочет знать, чем может помочь
вам.
</p>

<?php

$this->attachDynamicAnswers(function ($event, \app\models\GamePage $gamePage){
    $gamePage->addAnswer('Спросить о Гизе', 59);
    $gamePage->addAnswer('Спросить о Сахарских ледяных пустошах', 77);
    $gamePage->addAnswer('Спросить о городе Кахира', 143);
    $gamePage->addAnswer('Спросить где найти приют на ночь', 99);
});