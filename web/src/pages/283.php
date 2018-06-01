<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Торговец ведет вас к подвалу, соединенному
с домом на одной из больших площадей. Пройдя через дверь, охраняемую двумя крепкими людьми с железными палками, вы ждете в коротком коридоре,
озаряемом мерцающей световой панелью. Наконец,
стальные двери в его дальнем конце открываются,
и вы проходите в хранилище торговца. Здесь он показывает вам товар на продажу:
</p>
<p>
    Бризальный пистолет (с 6 зарядами) — 16 скадов<br />
    Пси-фокусировщик — 18 скадов<br />
    Поляризационные очки — 8 скадов<br />
    Фонарик — 10 скадов<br />
    Противогаз — 10 скадов<br />
    Шумовая граната — 8 скадов<br />
    Нож — 4 скада<br />
</p>
<p>
    «Я также покупаю эти вещи,— говорит вам торговец,— за половину озвученной цены».
</p>
<p>
    «С чего ты взял, что я захочу что-то продать?» —
спрашиваете вы.
</p>
<p>
    Его губы изгибаются в загадочной полуулыбке. «Я
полагаю, ты пришел в Венезию, чтобы отправиться на
пароме. Тебе понадобятся деньги на билет».
</p>
<?php

$this->setScenario('shop');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::GUN, 6, 16, 2);
$inv->add(\app\library\ItemsLibrary::PSY_FOCUSER,1,18,1);
$inv->add(\app\library\ItemsLibrary::POLARIZED_GLASSES,1,8,1);
$inv->add(\app\library\ItemsLibrary::FLASHLIGHT,1,10,1);
$inv->add(\app\library\ItemsLibrary::GAS_MASK,1,10,1);
$inv->add(\app\library\ItemsLibrary::SOUND_GRENADE,1,8,3);
$inv->add(\app\library\ItemsLibrary::KNIFE,1,4,3);

$shopBuy = new \app\models\Inventory();
$shopBuy->add(\app\library\ItemsLibrary::GUN, 6, 8);
$shopBuy->add(\app\library\ItemsLibrary::PSY_FOCUSER,1,9);
$shopBuy->add(\app\library\ItemsLibrary::POLARIZED_GLASSES,1,4);
$shopBuy->add(\app\library\ItemsLibrary::FLASHLIGHT,1,5);
$shopBuy->add(\app\library\ItemsLibrary::GAS_MASK,1,5);
$shopBuy->add(\app\library\ItemsLibrary::SOUND_GRENADE,1,4);
$shopBuy->add(\app\library\ItemsLibrary::KNIFE,1,2);

$this->params = [
    'shop' => $inv->toArray(),
    'shopBuy' => $shopBuy->toArray(),
    'takeItems' => (new \app\models\Inventory())->toArray(),
];

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',
        ($gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE)
            || $gamePage->character->hasItem(\app\library\ItemsLibrary::GUIDEBOOK)) ? 414 : 25);

});