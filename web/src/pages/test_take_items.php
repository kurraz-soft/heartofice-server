<?php
/**
 * @var \app\models\GamePage $this
 */
$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::GUN, 6);
$inv->add(\app\library\ItemsLibrary::GUN, 6);
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 1, 0, 6);

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
