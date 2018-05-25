<?php
/**
 * @var \app\models\GamePage $this
 */

$ground = new \app\models\Inventory();
$ground->add(\app\library\ItemsLibrary::FLASHLIGHT);
$ground->add(\app\library\ItemsLibrary::ROPE);

$this->setScenario('takeItems');

$this->params = [
    'takeItems' => $ground->toArray(),
];
?>
<p>
Среди вещей, обнаруженных в бардачке аэрокара, есть фонарик и моток веревки. Если у вас нет этих
предметов, то самое время их взять, потому что, если догадка барона верна, момент истины почти настал.
</p>
<?php
$this->addAnswer('Продолжить...', 39);
?>
