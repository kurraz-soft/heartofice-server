<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Все, что вы можете сделать — продать что-то из
своего имущества, чтобы собрать деньги на билет.
Вы неохотно отправляетесь искать уличного торговца, зная, что необходимость срочной продажи сильно снизит цену товаров. По крайней мере, вы быстро
находите покупателя — или скорее, он находит вас.
Человек с буравящим взглядом и копной окрашенныхв розовый цвет волос, слоняется у ворот пристани
с явным намерением поживиться на людях в ситуации, подобной вашей. «Билет на паром стоит немного
больше, чем ты думал, не так ли? — говорит он покровительственным тоном.— Ну, давай посмотрим, что
у тебя есть на продажу».
</p>
<p>
    Если у вас есть какие-либо из следующих вещей,
вы можете продать их по указанной цене.
</p>
<p>
    Бризальный пистолет — 5 скадов<br />
    Фонарик — 5 скадов<br />
    Аптечка — 5 скадов<br />
    Порция еды — 1 скад за каждую<br />
    Поляризационные очки — 2 скада<br />
    ИД-карта — 10 скадов<br />
</p>
<p>
    <span class="font-italic">Нужно собрать 10 скадов на билет на паром.</span>
</p>
<?php

$this->setScenario('shop');

$inv = new \app\models\Inventory();

$shopBuy = new \app\models\Inventory();
$shopBuy->add(\app\library\ItemsLibrary::GUN, 6, 5);
$shopBuy->add(\app\library\ItemsLibrary::FLASHLIGHT,1,5);
$shopBuy->add(\app\library\ItemsLibrary::MEDPACK,1,5);
$shopBuy->add(\app\library\ItemsLibrary::FOOD_PACK,1,1);
$shopBuy->add(\app\library\ItemsLibrary::POLARIZED_GLASSES,1,2);
$shopBuy->add(\app\library\ItemsLibrary::ID_CARD,1,10);

$this->params = [
    'shop' => $inv->toArray(),
    'takeItems' => (new \app\models\Inventory())->toArray(),
    'shopBuy' => $shopBuy->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', '352_1');

});