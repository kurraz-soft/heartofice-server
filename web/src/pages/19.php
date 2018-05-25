<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Капитан Новак выныривает из дыма и мчится прямо на вас. Его униформа порвана и опалена взрывом,
в глазах дикий блеск. Пока вы колеблетесь, стоит ли
преградить ему путь или остаться в стороне, бризальный луч внезапно прорезает воздух и попадает ему
в голову. Второй выстрел бьет в него уже в падении,
но отражается от брони и рикошетит в вас. Вы получаете ужасные ожоги.
</p>
<?php if($this->character->hasItem(\app\library\ItemsLibrary::BULLETPROOF_VEST)): ?>
<p class="font-italic">
    (-4 здоровья)
</p>
<?php else: ?>
<p class="font-italic">
    (-6 здоровья)
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($event, \app\models\GamePage $gamePage){
    if($gamePage->character->hasItem(\app\library\ItemsLibrary::BULLETPROOF_VEST))
    {
        $add = -4;
    }else
    {
        $add = -6;
    }
    $gamePage->character->addHealth($add);
});

$this->attachDynamicAnswers(function ($event, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        'Продолжить...',
        $gamePage->character->health > 0 ? '41' :'end_health',
        function ($event, \app\models\GamePage $gamePage){
            $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::HAMMER);
    });
});

?>
