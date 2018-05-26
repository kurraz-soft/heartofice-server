<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::PSY)
    && $this->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER)): ?>
    Внезапно возникшее опасение заставляет вас отказаться от этой идеи и ускользнуть из магазина.
<?php else: ?>
    Вы беспечно вдыхаете анестезию,
и ваше сознание покидает вас навсегда. Следовало
быть более осторожным и не рассчитывать на честность уличного подонка.
<?php endif; ?>
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY)
    && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER))
        $gamePage->addAnswer('Продолжить...', 223);
    else
        $gamePage->addAnswer('Продолжить...', 'end_empty');

});