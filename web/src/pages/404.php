<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Рядом с дверью расположена небольшая медная
пластина. Очевидно, изначально здесь была панель
управления дверями, но после замены кнопок сплошной заглушкой, комната превратилась в тюремную камеру. Используя пряжку ремня, вы взламываете пластину. Это занимает несколько часов упорного труда,
и вы обдираете пальцы до крови, но наконец отрываете ее. Взору предстает куча проводов, и вскоре вы
находите соединения, необходимые для того, чтобы
привести дверь в движение.
</p>
<p>
    Когда она открывается, по базе проносится аварийный сигнал: мягкий настойчивый звук, сопровождаемый автоматическим сообщением: «Внимание,
нарушитель. Всем охранным подразделениям связаться со своими постами».
</p>
<p>
    Разумеется, никто не услышит сигнал тревоги, но
все же вам лучше не болтаться здесь. Может включиться автоматический процесс закрытия внешней двери.
Вы прыгаете на подъемник и поднимаетесь наверх
к выходу.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 361);

});