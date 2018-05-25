<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 1;
?>
<p>
    С каждым шагом вы становитесь все слабее. <span class="font-italic">(-1 здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Кровь все еще льется из рваной раны на вашем плече, и вы понимаете, что тварь должно быть впрыснула вам вещество,
предотвращающее свертывание. Поспешно разорвав
подкладку своей куртки на полосы, вы перевязываете
рану, чтобы предотвратить дальнейшую потерю крови.
</p>
<p>
    У вас вырывается хриплый
вздох облегчения сквозь обмороженные губы, когда
башни и купола Венезии наконец появляются на горизонте.
</p>
<p>
    Оглядевшись, вы не видите никаких признаков
вашего преследователя. Возможно, он потерял к вам
интерес, вкусив вашей плоти.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->health > 0)
    {
        $gamePage->addAnswer('Продолжить...', 'end_health');
    }else
    {
        $gamePage->addAnswer('Двигаться дальше через джунгли', 250);
        $gamePage->addAnswer('Остановиться на отдых', 184);
    }
});