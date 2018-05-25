<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Среди разбросанных останков жертв горгоны вы
находите чью-то ИД-карту, бризальный пистолет (с 6
зарядами), фонарик и поляризационные очки.
</p>
<p>
    Боше берет очки и усмехается: «Вряд ли наш одноглазый приятель часто их надевал». Он предлагает
поделить находки поровну, но предоставляет вам право выбирать первому. Можете взять себе любые две
вещи, остальное отдать ему.
</p>
<p>
    С комфортом переночевав в пещере, вы отправляетесь в путь с рассветом.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory(0, 2);
$inv->add(\app\library\ItemsLibrary::ID_CARD);
$inv->add(\app\library\ItemsLibrary::GUN, 6);
$inv->add(\app\library\ItemsLibrary::FLASHLIGHT);
$inv->add(\app\library\ItemsLibrary::POLARIZED_GLASSES);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 199);

});