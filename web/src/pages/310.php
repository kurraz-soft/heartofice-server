<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL)? 0 : 1;
?>
<p>
Укрывшись от порывов ледяного ночного ветра за
скалистыми стенами перевала, вы ложитесь и выкраиваете пару часов прерывистого неспокойного сна.
Потом вы меняетесь: один ходит туда-сюда, пытаясь
согреться, пока другой дремлет. Несмотря на все ваши
усилия, жуткий холод пронизывает до костей.
</p>
<?php if($spend_health): ?>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php endif; ?>
<p>
    Утро пронзает плотные облака бледно-серебристым светом. Поднявшись и размяв свои усталые конечности, вы собираете вещи и направляетесь к Венезии
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 199);

});