<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 2;
?>
<p>
    Светящийся фантом высасывает силы из ваших
живых тканей, но на искусственные части тела это не
действует. Вытянув металлическую руку, вы хватаете
его за шею. Опираясь на свою кибер-ногу, вы пошатываясь, доходите до края пропасти.
</p>
<p>
    Фантом извивается в вашей мертвой хватке, оплывая и растекаясь, как тающий воск. Когда его пальцы
    пронзают живую часть вашей руки, сполох искр наносит вам повреждения <span class="font-italic">(-2 Здоровья)</span>.
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Вам удается сбросить
фантома вниз. Его тонкий жалобный крик из глубины
эхом отдается от стен, пока он падает, оставляя след
из обрывков светящегося тумана, как хвост кометы.
</p>
<?php endif; ?>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 149 : 'end_health');

});