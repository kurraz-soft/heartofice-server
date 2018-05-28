<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы разрезаете покрытую жиром кожу, чтобы добраться до мяса, которое несложно упаковать. Добавьте столько единиц Еды, сколько хотите, в список
вашего имущества. Вы можете также снять шкуру, чтобы использовать ее в качестве шубы, если считаете
необходимым.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 8);
$inv->add(\app\library\ItemsLibrary::FUR_COAT, 1);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 298);

});