<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
   ...
</p>
<?php
//TODO сократить

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasSkill(\app\library\SkillsLibrary::AGILITY) ? 196 : 173);

});