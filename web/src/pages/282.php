<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы отступаете на шаг назад и снова стреляете,
когда мозг барона подлетает ближе. В этот момент вы
используете свой пси-фокусировщик, чтобы прорвать
силовой щит. Выстрел попадает прямо в центр мозга.
Раздается ужасный телепатический вопль, когда он
падает на пол и начинает высыхать. Вы зажимаете руками уши, но не можете заглушить эти предсмертные
крики, крики, которые будут вечно преследовать вас
в кошмарах.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 261);

});