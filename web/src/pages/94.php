<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Столовая расположена на верхнем этаже. В ее
широких окнах открывается захватывающий дух вид
на город. Несколько минут вы вглядываетесь в высокие башни, кутающиеся в пелену циркулирующего
тумана. Внизу виден темный участок лесистой местности, освещенной яркими прожекторами. Это может
быть только пользующийся недоброй славой Монастырский парк.
</p>
<p>
    В столовой нет живых работников, лишь продовольственный автомат, который выдает обернутые
в фольгу пакеты при нажатии кнопки. Вы можете взять
любое количество пакетов, вплоть до восьми.
</p>
<p>
    Когда вы выходите из столовой, то почти сталкиваетесь с огромным фиджийцем в аккуратном черном
костюме и зеркальных очках. Он рассеянно бормочет
извинения и спешит мимо, внимательно осматривая
раздевалку. Он единственный, кого вы видели в здании и кто не показался вам местным сотрудником.
Вы уже направляетесь к лифту, когда он кричит Вам
вслед: «Эй! Кто Вы? Вы не мой босс!»
</p>


<?php

$ground = new \app\models\Inventory();
$ground->add(\app\library\ItemsLibrary::FOOD_PACK, 1, 0, 8);

$this->setScenario('takeItems');

$this->params = [
    'takeItems' => $ground->toArray(),
];

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::GUN))
        $gamePage->addAnswer('Использовать пистолет', 227);

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
        $gamePage->addAnswer('Использовать Рукопашный бой', 248);

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
        $gamePage->addAnswer('Применить Хитрость', 269);

    $gamePage->addAnswer('Спасаться бегством', 290);
});