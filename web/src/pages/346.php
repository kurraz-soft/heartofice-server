<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Голгот внезапно срывается с места. Он хватает
Боше за шею сзади, и приставив пистолет к виску,
приказывает тому стрелять в Сингха, если он не хочет получить бризальный заряд. Боше поднимает оружие и стреляет, когда Сингх поворачивается на шум.
Сингха отбрасывает назад — отражающий нагрудник
обуглился, но остановил бризальный дуч. Голгот хладнокровно нажимает курок, снося голову своему живому щиту.
</p>
<p>
    Сингх, еще не оправившись от удара, непослушными пальцами возится со спусковым механизмом
мантрамукты. «Добей его, сейчас! — кричит Вам Голгот.— Прежде, чем он оправится!»
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasLoadedFirearm())
        $gamePage->addAnswer('Использовать пистолет', 389, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);
        });
    if($gamePage->character->hasItem(\app\library\ItemsLibrary::SOUND_GRENADE))
        $gamePage->addAnswer('Использовать пистолет', 389, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::SOUND_GRENADE);
        });

    $gamePage->addAnswer('Не вступать в бой', 410);
});