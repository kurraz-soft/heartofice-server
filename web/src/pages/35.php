<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы уныло жуете, пытаясь растянуть остатки ваших
скудных запасов подольше.
</p>
<p>
    <?php if($this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL)): ?>
    Вам удается поймать перелетную птицу, которая присаживается отдохнуть на ледяной пик. Теперь вам не придется терять жизненные силы.
    <?php else: ?>
    Вы пытаетесь поймать перелетную птицу, которая присаживается отдохнуть на ледяной пик, но терпите неудачу и птица улетает.
    Голод продолжает подтачивать ваши силы. <span class="font-italic">(-1 Здоровья)</span>
    <?php endif; ?>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    if(!$gamePage->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
        $gamePage->character->addHealth(-1);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 100 : 'end_health');
});