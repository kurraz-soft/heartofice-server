<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Ближайший к вам противник целится ножом
в сердце. Вы отклоняете удар, блокируя его запястье, затем подскакиваете и дважды бьете ему в лицо
локтем, вбивая переносицу в мозг. Он оседает, и вы
выхватываете нож из его ослабевших пальцев. Человек с пистолетом не подходит в качестве мишени — не
тот угол броска, поэтому вы бросаете нож в третьего.
Он вонзается в плечо, и противник отступает.
</p>
<p>
    Человек с пистолетом собирается стрелять. Вы
ныряете вперед, слыша, как заряд проходит выше
и врезается в стену. Вы применяете ножной захват
под колени, и он падает, не успев выстрелить второй
раз. Он валится в огонь, жуткий крик боли обрывается, когда стрелок с глухим чавкающим звуком ударяется головой об острый выступ скалы.
</p>
<p>
    Прежде чем вы успеваете встать на ноги, человек с ножом, торчащим из плеча, подбегает и заносит
ногу для удара в живот. Вы разворачиваетесь боком,
ловите его лодыжку и перекидываете его в развороте
через бедро. Вы зажимаете его шею и выворачиваете,
короткий влажный хруст знаменует окончание битвы.
</p>
<p>
    Вы обыскиваете убежище. У бризалного пистолета
остался один выстрел. Вы также находите два ножа,
поляризационные очки, комплект теплой одежды, бинокль и 6 продовольственных пайков.
</p>
<p>
    Осталось только дождаться, когда кончится буря, и продолжить путь.
</p>

<?php

$ground = new \app\models\Inventory();
$ground->add(\app\library\ItemsLibrary::GUN, 1);
$ground->add(\app\library\ItemsLibrary::KNIFE, 1, 0, 2);
$ground->add(\app\library\ItemsLibrary::POLARIZED_GLASSES);
$ground->add(\app\library\ItemsLibrary::WARM_CLOTH);
$ground->add(\app\library\ItemsLibrary::BINOCULARS);
$ground->add(\app\library\ItemsLibrary::FOOD_PACK, 1, 0, 6);

$this->setScenario('takeItems');

$this->params = [
    'takeItems' => $ground->toArray(),
];

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 393);
});