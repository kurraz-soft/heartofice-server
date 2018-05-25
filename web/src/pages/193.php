<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::AGILITY) && $this->character->hasItem(\app\library\ItemsLibrary::ROPE)): ?>
<p>
    ...
</p>
<?php else: ?>
Когдавы прокладываете путь вниз, ваша нога скользит по
ледяному пласту, и вы срываетесь в гибельный полет к недрам земли…
<?php endif; ?>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($this->character->hasSkill(\app\library\SkillsLibrary::AGILITY) && $this->character->hasItem(\app\library\ItemsLibrary::ROPE))
        $gamePage->addAnswer('Это конец', 'end_empty');
    else
        $gamePage->addAnswer('Продолжить...', 237);

});