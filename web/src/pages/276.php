<?php
/**
 * @var \app\models\GamePage $this
 */

?>
<p>
    Парящая платформа доставляет вас на круглую
площадку, обозначенную как «Исследовательский
уровень». Вы заходите и быстро осматриваете комнаты на этом этаже. В длинном зале вы находите ящики
с зимней одеждой, едой и аптечками — их гораздо
больше, чем нужно одному человеку.
</p>
<p>
    Вы открываете одну из упаковок с едой. Содержимое все еще свежее.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::WARM_CLOTH, 1, 0, 8);
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 1, 0, 8);
$inv->add(\app\library\ItemsLibrary::MEDPACK, 1, 0, 8);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasItem(\app\library\ItemsLibrary::MINI_GLOSY) ? 14 : 36);

});