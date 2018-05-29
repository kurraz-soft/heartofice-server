<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 1;
?>
<p>
    Барон Сириазис возмущен вашим вторжением.
Поддерживаемый огромной силой своего разума, он
зловеще парит к вам, парализуя вас молниеносным
телепатическим ударом. Вы застываете на месте, без
возможности двинуть и мускулом, пока он скользит вокруг вас, как жуткая тряпичная кукла, подвешенная на
невидимых струнах. «Паралич пройдет через несколько часов,— шипит он.— Я оставлю тебя обдумывать
твою дурость».
</p>
<p>
    Он возвращается в свою палатку и опускает полог.
</p>
<?php if(!$this->character->hasSkill(\app\library\SkillsLibrary::PARADOX_CONTROL)): ?>
<p>
    Вы останетесь неподвижно лежать на снегу долгие часы. <span class="font-italic">(-1 здоровья)</span>
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    if(!$gamePage->character->hasSkill(\app\library\SkillsLibrary::PARADOX_CONTROL))
        $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PARADOX_CONTROL))
    {
        $gamePage->addAnswer('Освободиться от ментального паралича и пойти поговорить с Боше', 104);
        $gamePage->addAnswer('... с Голготом', 126);
        $gamePage->addAnswer('... с Гаунтом', 148);
    }else
    {
        $gamePage->addAnswer('Продолжить...', 192);
    }

});