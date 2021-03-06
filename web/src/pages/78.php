<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Флаер медленно поднимается на струях раскаленного газа. Когда включаются маршевые двигатели,
он моментально набирает скорость и с ревом уносится
в небеса. Солнце сверкает на металлической обшивке, когда он поворачивает к востоку. Вы провожаете
его взглядом, пока он не пропадает в мягком синем тумане.
</p>
<p>
   Вы идете пешком до берега, покрытого белым
песком. Вдоль него вы следуете на север к виднеющимся не так далеко постройкам. Это паромная
станция. Несколько мужчин окидывают вас подозрительными взглядами прежде, чем пропустить к парому, одно-мачтовой шхуне, лучшие дни которой давно
миновали. Двое или трое других пассажиров уже на
борту. При виде вас, один из них говорит: «Отлично!
Теперь паром полон, и мы, наконец, можем отправиться в Порт-Судан.»
</p>
<p>
    Вы должны заплатить 1 скад за проезд в Судан. <span class="font-italic">(-1 скад)</span>
</p>
<p>
    Лунный свет образует бледную дорожку на воде,
когда вы достигаете Судана, кучки деревянных хижин, ютящихся под прикрытием заброшенной городской стены. Лодка скользит по гавани, направляемая
мигающим маяком и бросает якорь у причала, сильно
пропахшего рыбой.
</p>
<p>
    Улицы пусты, и, очевидно, уже поздно искать гостиницу на ночь, поэтому вы решаете спать на лодке.
Перевозчики возражают, настаивая на дополнительной плате, если вы опять хотите использовать их транспорт, но другие пассажиры встают на вашу сторону.
«Хватит с вас и того, что вы продержали нас на лодке
два дня, пока не набрали достаточно пассажиров!» —
кричит один из них.
</p>
<p>
    Наконец перевозчики неохотно уступают. Вы
спите до рассвета, который окрашивает небо в алые цвета.
</p>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->spendMoney(1);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Сделать покупки в Судане', 101);
    $gamePage->addAnswer('Сразу отправиться в Дью-Эн', 234);

});