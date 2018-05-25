<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    У гарганских клонов настолько жуткая репутация,
что никто даже не осмеливается предложить убить их.
«Я слышал, что другие клоны были убиты, но кто знает, правда ли это?» — говорит один из мужчин в широкополой синей шляпе охотника-туарега.
</p>
<p>
    «Это верно,— кивает хозяин.— Я бы не хотел,
чтобы дюжина амазонок заявилась в мой бар и потребовала ответить за своих сестер».
</p>
<p>
    В конце концов компромисс достигнут. Бесчуственных женщин кладут в небольшую лодку, и вы выталкиваете ее в ледяное море. Вы смотрите, как лодка, скользя, исчезает в вечернем тумане, и, вздрогнув
от холода, возвращаетесь по снегу в бар, где вам уже
принесли еды и вина, и готовы чествовать, как героя.
</p>
<p>
    <span class="font-italic">(+1 здоровья)</span>
</p>
<p>
    Хозяин также дает вам 2 Еды в дорогу.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 2);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addHealth(1);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 314);

});