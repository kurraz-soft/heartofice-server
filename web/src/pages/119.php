<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Смертельный синий шип света пронзает воздух
и прожигает грудь человека с оружием. Охотник с ножом моргает, начинает пятиться, а затем понимает,
что у него нет выбора, кроме как напасть на вас.
</p>
<p>
    Этот момент колебания решает его судьбу, поскольку дает вам время прицелиться и выстрелить
в него в упор. Третий человек срывается с места с криком отчаянной ярости. Вы бьете его прикладом, и он
падает как подкошенный.
</p>
<p>
    Вы обыскиваете убежище ловцов. Найденный бризальный пистолет имеет два заряда в запасе.
Вы также находите два ножа, поляризационные очки,
бинокль, комплект зимней одежды и 6 продовольственных пакетов.
</p>
<p>
    Возьмите все, что вам приглянулось.
</p>
<p>
    Теперь осталось лишь дождаться окончания бури,
и можно вновь отправляться в путь по свежему снегу.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::GUN);
$inv->add(\app\library\ItemsLibrary::GUN_AMMO,2);
$inv->add(\app\library\ItemsLibrary::KNIFE, 2);
$inv->add(\app\library\ItemsLibrary::POLARIZED_GLASSES, 1);
$inv->add(\app\library\ItemsLibrary::WARM_CLOTH, 1);
$inv->add(\app\library\ItemsLibrary::BINOCULARS, 1);
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 6);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::GUN_AMMO, 2);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 393);

});