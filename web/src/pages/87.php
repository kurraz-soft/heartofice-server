<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
Боше умирает до того как успевает упасть. Его смерть действует, как сигнал для начала боевых действий. Голгот и Сингх, уверенные, что каждый из них — самый
опасный противник, разворачиваются друг к другу.
Первым стреляет Голгот: заряд с шипением, разбрасывая искры, отскакивает от отражающего жилета
сикха. Тот в ответ поднимает матрамукту.
</p>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 410);

});