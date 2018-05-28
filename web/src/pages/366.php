<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Используя чистую силу своего разума, вы проникаете в зону искаженного времени и деактивируете
стазис-бомбу. Когда течение времени возвращается
в нормальное русло, мужчина удивленно смотрит на
вас и нерешительно двигается вперед. Он даже не догадывается, что его шаг занял два столетия. Вы можете взять стазис-бомбу себе, если хотите.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::STASIS_BOMB);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 409);

});