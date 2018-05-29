<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Этот ретровирус дает вам способность изменять внешность, менять
цвет кожи, волос и глаз по желанию.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->addSkill(\app\library\SkillsLibrary::CHAMELEON_SKIN);
    $gamePage->character->spendMoney(9);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 434);

});