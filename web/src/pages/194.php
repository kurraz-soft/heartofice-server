<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 1;
?>
<p>
    Пусть ваше шестое чувство и не развито так хорошо, как у барона, но и оно способно подать вам
тревожный знак: что-то чужеродное, что-то хищное
движется к вам, неся смерть. Вы слышите клацанье паучьих ног по мраморному полу. Резкий прыжок в сторону — и вашу ногу копьем пронзает острая боль.
Если бы не ПСИ, челюсти чудовища разорвали бы вас
в клочья.
</p>
<p>
    <span class="font-italic">(-1 здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
Вы бросаетесь к двери, где
виднеется отсвет факела Боше. Как только вы перепрыгиваете порог, барон захлопывает дверь, а Боше
роняет засов. Как раз вовремя. Секундой позже дверь
вздрагивает, как будто что-то гигантское врезалось
в нее снаружи.
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 281 : 'end_health');

});