<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы ужинаете и перевязываете раны с помощью аптечки...
</p>
<p class="font-italic">
    (-1 Пачка еды) (+2 здоровья)
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::FOOD_PACK);
    $gamePage->character->addHealth(2);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', '192_1');

});