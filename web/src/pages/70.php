<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Один из них ставит вам подножку, а второй пытается вонзить нож в шею.
</p>
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::AGILITY)
    || $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT)): ?>
<p>
    Вам удается парировать удар и убежать, по пути сгребая свою одежду
</p>
<?php else: ?>
<p>
    Клинок наносит рану через грудину. <span class="font-italic">(-3 здоровья)</span>
</p>
<?php endif ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    if(!$this->character->hasSkill(\app\library\SkillsLibrary::AGILITY)
        && !$this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
        $gamePage->character->addHealth(-3);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::AGILITY)
        || $this->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
    {
        $gamePage->addAnswer('Продолжить...', 92);
    }elseif($gamePage->character->health > 0)
    {
        $gamePage->addAnswer('Отступить в парилку', 4);
        $gamePage->addAnswer('Отбиваться здесь', 26);
    }else
        $gamePage->addAnswer('Это конец.', 'end_health');
});