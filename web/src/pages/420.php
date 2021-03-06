<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Разрушенный город вскоре остается позади. Вы
с трудом пробираетесь через густой подлесок, медленно продвигаясь к окраинам Лионесса. Здесь, где
жара менее удушающая, несколько разрозненных общин возделывают равнины. Вы набираете провизии
для дальнейшего путешествия, зная, что скоро покинете этот залитый солнцем оазис.
</p>
<p>
    Через два дня вы оказываетесь на краю ледника. Лионесс отсюда виден только ночью, как далекая
зарница на востоке. Снег под вашими ногами сильно
хрустит, пока вы плететесь по нему. Вскоре после рассвета внезапно поднимаются густые облака, открывая
величественный вид на горы, закрывающие небосвод
справа от вас. Вы стоите и смотрите на клубящиеся
вокруг наиболее высоких пиков вихри снега, срываемого с горных склонов ураганным ветром.
</p>
<p>
    Вы чувствуете жуткое одиночество. Там, где вы
стоите, нет ни дуновения, и вы слышите только далекий свист, однако этот ветер достаточно силен, чтобы
разметать спресованный снег в пыль. Власть стихий
потрясает; вы не более, чем соринка в глазу Природы.
И все же сила, ожидающая вас в Дью-Эне, достаточна,
чтобы ослепить этот глаз — сила, способная преобразовать мир. Сейчас, когда вы смотрите снизу вверх на
возносящиеся горы, все это кажется нереальным.
</p>
<p>
    Вы оборачиваетесь, чтобы посмотреть на юг.
Нельзя терять здесь время, праздно предаваясь воображению. Впереди лежит ваша цель: сила, способная
воплотить ваши мечты.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',400);

});