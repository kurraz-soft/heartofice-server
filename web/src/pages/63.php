<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Бризальный луч, потрескивая разрезает воздух,
но рассыпается снопом искр от удара о невидимый
ментальный щит.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if(
        $gamePage->character->hasSkill(\app\library\SkillsLibrary::PARADOX_CONTROL)
            && $gamePage->character->inventory[\app\library\ItemsLibrary::GUN]->count
    )
        $gamePage->addAnswer(
            'Попытаться снять щит пси-фокусировщиком и выстрелить снова',
            282
        );

    $gamePage->addAnswer('Попробовать проскользнуть в туннели на другой стороне', 129);
    $gamePage->addAnswer('Отступить', 107);

});