<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasItem(\app\library\ItemsLibrary::BULLETPROOF_VEST) ? 4 : 6
?>
<p>
    Дверь лифта открывается. Перед вами один из
летающих дроидов, который немедленно открывает
огонь. Хотя вы отпрыгиваете в сторону, выстрел распарывает вашу руку, прожигая ее до кости.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Вы отчаянно жмете на
кнопку. Когда дверь закрывается, вы видите, как Тадра Бей погибает под шквалом лазерного огня. Если
вы не сможете понять, что хочет услышать компьютер,
вас ждет та же участь.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health) {

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 301);

});