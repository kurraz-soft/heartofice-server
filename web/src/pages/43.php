<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Голгот открывает ответный огонь, но у него нет
защиты против немыслимой мощи мантрамукты, которая буквально разрывает его на куски.
Его последний выстрел предназначался вам, и вы чувствуете, как мучительная боль обжигает бок.
<?php if($this->character->hasItem(\app\library\ItemsLibrary::BULLETPROOF_VEST)): ?>
<span class="font-italic">(-2 Здоровья)</span>
<?php else: ?>
<span class="font-italic">(-3 Здоровья)</span>
<?php endif; ?>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    $gamePage->character->addHealth($gamePage->character->hasItem(\app\library\ItemsLibrary::BULLETPROOF_VEST)?-2:-3);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 415 : 'end_health');
});