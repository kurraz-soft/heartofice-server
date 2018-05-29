<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Риза выводит вас из здания. Кажется, что вы попали на открытое пространство. Здесь даже гуляет
легкий ветерок! Наблюдая, как вы изумленно озираетесь, он смеется и показывает на лужайку, уходящую
к горизонту. Линия горизонта как будто поднимается
вверх, огибая небо и теряясь в неясном свете прямо
над головой. По обеим сторонам в каких-нибудь сотнях метров от вас огромные опоры уходят в небо.
</p>
<p>
    «Ты ожидал увидеть закрытую космическую станцию в древнем стиле?» — спрашивает Риза.— Мы веками расширяли эль-Лат, пока он не стал таким, как ты
его видишь: цилиндром около двух километров в поперечнике и длинной пол-километра. Его вращение
обеспечивает гравитацию, лучи солнца — свет и тепло».
</p>
<p>
    Он сажает вас на флаер, и вскоре эль-Лат исчезает из вида, когда вы берете курс на атмосферу Земли.
Прорезав ночь, вы приземляетесь в Ледяных пустошах
Сахары, примерно в восьмистах километрах к востоку
от Дью-Эна. Лучи золотистого света бороздят небо за
вашей спиной, когда вы открываете запоры кабины
и спрыгиваете на снег. Из радиоприемника раздается
искаженный помехами голос Ризы: «Мы вернем флаер
назад с помощью автопилота. Удачи».
</p>
<p>
    Вы стоите на месте, пока флаер со вспышкой взлетает в холодное утреннее небо. Шум его двигателей
растворяется вдалеке. Вы остались в одиночестве.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 298);

});