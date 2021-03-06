<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Пока ваши спутники поднимаются к Сердцу, краем глаза присматривая друг за другом, вы бросаете
в них гранату. Взрыв сбивает Голгота и Боше с ног, но
Вайра Сингх возвышается над ними, как величественный столп, и оборачивается. Благодаря своей броне,
он всего лишь оглушен.
</p>
<p>
    С одного взгляда он понимает, что теперь может
спокойно прикончить этих двоих. Непосредственная
угроза — это вы. Прицелившись из мантрамукты, он
выпускает ревущий поток плазмы, который менее,
чем за секунду превращает вас в безжизненный остов.
Ваше приключение окончено.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец','end_empty');

});