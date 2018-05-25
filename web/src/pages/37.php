<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы стараетесь как можно лучше распорядиться
оставшейся едой. В полдень, когда солнечный свет
немного спасает от холода, вы ложитесь спать. Поднявшись ближе к вечеру, вы идете всю ночь, так что
движение не дает вам замерзнуть насмерть. Вы смотрите на уныло поблескивающие над головой звезды,
одинокие огоньки, проплывающие в безмолвных небесах.
</p>
<p>
<?php if($this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL)): ?>
    Ваша природная выносливость позволяет вам выдержать испытания
без потерь.
<?php else: ?>
    <span class="font-italic">(-1 Здоровья)</span>
<?php endif; ?>
</p>
<?php if($this->character->health > 1): ?>
<p>
    Когда рассвет наконец заливает небо серебром
и оставляет розовато-золотистые дорожки на снегу,
вы с удивлением обнаруживаете, что по вашим щекам бегут слезы радости. Вы пережили еще один день
крайне суровых испытаний.
</p>
<?php endif; ?>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){
    if(!$gamePage->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL))
        $gamePage->character->addHealth(-1);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        'Продолжить...',
        $gamePage->character->health > 0 ? 125 : 'end_health'
    );
});