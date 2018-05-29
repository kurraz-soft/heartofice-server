<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 4;
if($this->character->hasItem(\app\library\ItemsLibrary::FUR_COAT) || $this->character->hasItem(\app\library\ItemsLibrary::WARM_CLOTH))
    $spend_health -= 2;
if($this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) || $this->character->hasItem(\app\library\ItemsLibrary::BURREK))
    $spend_health -= 1;
?>
<p>
    Окруженный безграничным снежным простором,
вы утомленно бредете к своей цели. Солнце плывет
низко по небосклону, дрожа как огненно-оранжевый
масляный шар на фоне клубящегося фиолетовогонеба. Когда оно проваливается в лежащее вдоль горизонта облако, вы чувствуете, как мрачный холод дня
начинает уступать ледяной жестокости ночи.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addKeyword(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...',$gamePage->character->health > 0 ?444:'end_health');

});