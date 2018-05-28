<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Факс ведет вас по лестнице. Внизу широкий круглый холл с несколькими отходящими от него туннелями, над каждым из которых указатель места назначения. Вы с грустью читаете их: Нью-Йорк, Москва,
Эдинбург… Большинство из этих мест сейчас погребены под километровым слоем льда.
</p>
<p>
    Факс показывает вам встроенный в стену пищевой автомат. «Большинство кнопок не работает, но
плитка скаджа довольно питательна». Он нажимает кнопку, машина урчит и через мгновение в лоток
падает завернутый в фольгу блок. Развернув его, вы
обнаруживаете жевательный батончик, который оказывается неожиданно вкусным. Вы можете взять их
с собой столько, сколько хотите.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::FOOD_PACK, 1, 0, 8);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::CYBERNETIC))
        $gamePage->addAnswer('Продолжить...', 9);
    else
    {
        $gamePage->addAnswer('Исследовать туннели', 439);
        $gamePage->addAnswer('Попрощаться с Факсом и продолжить свое путешествие', 420);
    }

});