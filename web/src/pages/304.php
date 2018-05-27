<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    У Голгота нет времени на перезарядку арбалета.
Выхватив нож, он бросается вперед, но не достаточно быстро, чтобы помешать вам выстрелить. Бризальный луч попадает ему в грудь, и он падает замертво
у ваших ног.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 72);

});