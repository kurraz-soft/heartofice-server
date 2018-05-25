<?php
/**
 * @var \app\models\GamePage $this
 */
$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::GUN);
$inv->add(\app\library\ItemsLibrary::GUN_AMMO,5);
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 10);

$this->params = [
    'takeItems' => $inv->toArray(),
];
?>

<p>
    ////////TEST
</p>
<p>
    На земле лежат предметы
</p>
