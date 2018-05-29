<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы не прошли и тридцати метров по первому туннелю, когда сзади раздался грохот взрыва. Подбежав
обратно к залу, где вы оставили своих спутников, вы
видите в воздухе клубы дыма. Из усыпанного обломками холла раздается слабый кашель. Сила взрыва расколола перегородку над туннелем, и каменная пыль
осела на пол. Похоже, что туннель может обрушиться
в любой момент.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::HAMMER)?19:41);

});