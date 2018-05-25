<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
   Вы проклинаете опрометчивость, с которой отправились в Ледяные пустоши без надлежащей подготовки. Отсутствие еды усугубляется холодом, который, кажется, пронизывает до костей. Каждое утро вы
просыпаетесь настолько сонным и вялым, как будто
ночью вас навестил вампир. Каждый шаг стоит огромных усилий; вы погружены в апатию от усталости и голода.

    Если вы не владеете Выживанием, то потеряйте
4 единицы Здоровья, поскольку вы медленно умираете от голода.
</p>
<p>
    Вы медленно умираете от голода.
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL)): ?>
    Вам удается поймать птицу, которая садится на один из ледяных пиков <span class="font-italic">(-2 здоровья)</span>
<?php else: ?>
    <span class="font-italic">(-4 здоровья)</span>
<?php endif; ?>
</p>
<p>
<?php if($this->character->hasItem(\app\library\ItemsLibrary::BURREK)): ?>
    Вы употребляете немного маслянистой крови буррека для поддержания сил <span class="font-italic">(+1 здоровья)</span>
<?php endif; ?>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    $add = -4;

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
        $add = -2;
    if($gamePage->character->hasItem(\app\library\ItemsLibrary::BURREK))
        $add += 1;

    $gamePage->character->addHealth($add);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0?100:'end_health');
});