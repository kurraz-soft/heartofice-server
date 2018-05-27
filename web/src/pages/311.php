<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
Уже поздно. Пришло время найти какой-нибудь
приют на ночь. Отель «Оссиман» еще открыт и предлагает ночлег за 5 скадов.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->money >= 5)
        $gamePage->addAnswer('Снять номер', 333, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->spendMoney(5);
        });

    $gamePage->addAnswer('Спать на улице', 165);

});