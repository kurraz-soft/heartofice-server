<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы дожидаетесь рассвета...
</p>
<?php if($this->character->hasKeyword(\app\library\KeywordsLibrary::SAND_CLOCK)): ?>
<p>
    <span class="font-italic">(-1 здоровья)</span>
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::SAND_CLOCK))
        $gamePage->character->addHealth(-1);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 243 : 'end_health');

});