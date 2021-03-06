<?php
/**
 * @var \app\models\GamePage $this
 */
$health_loose = 3;
?>
<p>
    «Я путешествовал много недель,— резко отвечаете вы,— и не намерен отказываться от вкусного горячего обеда просто потому, что две фурии с плечами
шире, чем у меня, решили набраться до беспамятства».
</p>
<p>
    Ваш вызывающий тон встречает глухое одобрительное бормотание других клиентов. Но это не совсем похоже на поддержку. Очевидно, близнецы установили здесь тиранию много часов назад.
</p>
<p>
    Вы идете вперед. Одна из близнецов упирает руку
в вашу грудь. Вы применяете захват в замок и разворачиваетесь. Она вырывается, опуская руку под стойку бара и резко, с силой, но в тоже время грациозно
выбрасывает ее в апперкоте. Вы сплевываете кровь
в сторону, блокируете удар второй сестры и отвечаете тычком жестко сложенных в конус пальцев в солнечное сплетение.
</p>
<p>
    Она принимает удар, гася его стальными мышцами пресса. Ее сестра, появившись рядом, целится
кулаком в почки, чего вы избегаете, отклонившись,
и удар приходится в бедро.
</p>
<p>
    Таверна Гиб-аль-Халтера никогда не видела такой жестокости: удар за ударом, прыжки, подножки,
выпады, брызги крови на глазах у изумленных посетителей. <span class="font-italic">(-<?= $health_loose ?> здоровья)</span>
</p>
<?php if($this->character->health > $health_loose): ?>
    Вы видите, что близнецы наконец отступаюти показывают, что готовы закончить борьбу.
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($health_loose) {

    $gamePage->character->addHealth(-$health_loose);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->health > 0)
    {
        $gamePage->addAnswer('Согласиться', 164);
        $gamePage->addAnswer('Драться до победного конца', 186);
    }else
        $gamePage->addAnswer('Это конец.', 'end_health');

});