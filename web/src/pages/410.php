<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Человек представляется как капитан Казимир
Новак, командир личной охраны Верховного жреца.
«Население обезумело»,— говорит он с негодованием.— Они штурмовали храм. Я сопровождал Верховного жреца в убежище, когда сюда ворвалась группа
бунтовщиков, которые швырнули стазис-бомбу. Это
последнее, что я помню».Несмотря на то, что Голгот разрядил обойму бризального пистолета в Сингха, тот все еще жив. Он поднимает пушку. Громовой раскат заполняет пещеру,
когда мощь оружия высвобождается, посылая заряд
сверкающей энергии в воздух. Спрятавшись в одной
из шахт лифта, вы выглядываете и видите, что Сингх
умирает.
</p>
<p>
    Но и у Голгота не было защиты против столь мощного оружия, и его тело разнесло на куски.
</p>
<p>
    Вы медленно выходите из укрытия и шагаете к месту бойни. Вайра Сингх поднимает на вас туманный
взгляд, и ваши мышцы каменеют. Его пушка требует
времени на перезарядку, но он все еще может подстрелить вас из пистолета.
</p>
<p>
    Но он слишком благороден для этого. «Теперь
у меня нет шансов,— шепчет он.— Ты заберешь мощь.
Используй ее мудро…»
</p>
<p>
    Он резко падает, его глаза закрываются. Вы единственный оставшийся в живых.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 415);

});