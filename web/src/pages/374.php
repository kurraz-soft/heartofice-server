<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы уверенно заходите в холл. Администратор,
чопорный человек с надменно искривленными губами, сидит за стойкой. Позади него на стене изображен
символ Общества: круг с точкой в центре и вписанный
в него треугольник. В дальней стене из черного мрамора видны двери лифта бронзового цвета
</p>
<p>
    Администратор смотрит на вас и моргает: «Добрый вечер. Чем я могу вам помочь?»
</p>
<p>
    Не зная, как здесь принято себя вести, вы просто вручаете ему карту. Он прокатывает ее через считывающее устройство на столе, сверяется с экраном
и возвращает ее. Холодное выражение лица сменяется елейной улыбкой: «Добро пожаловать! Все наши
ресурсы в вашем распоряжении. В настоящее время
других членов Общества в Кахире нет, таким образом,
здание полностью ваше».
</p>
<p>
    Двери лифта открываются. Вы бормочете слова
благодарности и отходите от стойки. В лифте вы изучаете панель с кнопками и решаете на какой этаж
отправиться.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Библиотека', 6);
    $gamePage->addAnswer('Медицинский отсек', 28);
    $gamePage->addAnswer('Спортзал', 51);
    $gamePage->addAnswer('Оружейная', 447);
    $gamePage->addAnswer('Столовая', 94);

});