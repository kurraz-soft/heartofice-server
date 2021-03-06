<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы чувствуете, что он лжет. Сфокусировав взгляд,
вы проникаете глубже в его мысли, пока он беспомощно лежит на кафельном полу. Душ осыпает вас каплями ледяной воды.
</p>
<p>
    Вы видите слабый образ калеки. Его седые волосы облаком окружают старое, больное, испещренное
глубокими морщинами лицо. Он приказал убить вас.
Исполнитель не знает, почему.
</p>
<p>
    Решив, что проще допросить убийцу, вы спрашиваете: «Кто тебя нанял?»
</p>
<p>
    «Барон Сириазис, телепат из Византия. Он сказал, что ты не должен попасть в Кахиру».
</p>
<p>
    «Почему он хочет убить меня?» — спрашиваете вы.
Это риторический вопрос: вы уже прочитали в разуме
убийцы, что он не знает ответа. Это тайна, которую
вам предстоит раскрыть позже. Приказав убийце убираться, вы вытираетесь и одеваетесь. Вы находите 10
скадов у убитого, а также 2 ножа.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::KNIFE,1, 0 , 2);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    $gamePage->character->money += 10;
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить', 92);

});