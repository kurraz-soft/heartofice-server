<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы идете через равнину, покрытую причудливыми торосами, которые отливают металлическим блеском на фоне светло-голубого неба. Жалобно стонет
гуляющий между торосами ветер. Вы не видите никаких признаков жизни. Холод пробирает вас снаружи,
голод гложет изнутри.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $food_num = $gamePage->character->inventory->getQuantity(\app\library\ItemsLibrary::FOOD_PACK);

    if($food_num >= 2)
        $gamePage->addAnswer('Продолжить...', 100, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::FOOD_PACK);
            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::FOOD_PACK);
        });
    elseif($food_num == 1)
        $gamePage->addAnswer('Продолжить...', 35, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::FOOD_PACK);
        });
    else
        $gamePage->addAnswer('Продолжить...', 56);

});