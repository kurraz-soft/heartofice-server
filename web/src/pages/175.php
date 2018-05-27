<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Из лабиринта туннелей впереди доносится какой-то звук. Боше навостряет уши. «Старая-добрая
лазерная перестрелка»,— говорит он и со значением
добавляет: «Но ни у кого из остальных не было лазеров».
</p>
<p>
    Эта загадка вскоре разрешается. Завернув за
угол, вы сталкиваетесь с тремя летающими дроидами, которые напоминают большие серебристые яйца
с вращающейся турелью внизу. Они скользят прямо
к вам, прицельные огни их лазеров пляшут перед вашими глазами. Боше бросается в боковой туннель. Секундой позже вы следуете за ним, как раз когда три
лазерных луча скрещиваются, опаляя каменную плиту
пола, на которой вы только что стояли.
</p>
<p>
    Молниеносно пробежав по туннелям, вы оказываетесь в круглой комнате с фиолетовой мозаичной звездой на полу. Несколько других туннелей ведут
в нее, и в конце одного из них вы видите Вайру Сингха, Тадру Бей и Чейма Голгота, удирающих от другой группы летающих дроидов. «Мы разворошили их
гнездо,— кричит Голгот.— Их слишком много, чтобы драться!»
</p>
<p>
    Когда он вбегает в комнату, Вайра Сингх на ходу
стреляет из мантрамукты поверх голов Бей и Голгота.
Четыре дроида взрываются в сполохе плазмы, но вы
видите, что остальные уже приближаются к комнате
по другим туннелям.
</p>
<p>
    В противоположной стене видны семь лифтов со
стеклянными дверями, каждый рассчитан на одного
человека. Тадра Бей бежит к ближайшему, и дверь
за ней закрывается. Через несколько секунд комнату
заполнят летающие дроиды. У вас и всех остальных
нет иного выбора, кроме как последовать ее примеру.
Когда вы заходите в лифт, дверь закрывается и электронный голос говорит: «Представьтесь, пожалуйста».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Назвать настоящее имя', 280);
    $gamePage->addAnswer('Притвориться последователем Волентийского культа ', 301);

});