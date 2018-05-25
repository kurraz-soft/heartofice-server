<?php
/**
 * @var \app\models\GamePage $this
 */
use app\library\ItemsLibrary;
?>

<p>
    Рассеянный дымкой солнечный свет отражается
от снежных дюн с непереносимой для глаз яркостью.
Блеск белый и резкий, как голая кость. Прищуривание не помогает. Ваши глаза устали, в них как будто насыпали песка. На четвертый вечер, стоя позади
своего ледяного убежища, вы пристально смотрите на пейзаж. Похоже на просмотр кровавого фильма. На
следующий день вставшее солнце так сильно слепит, что вы совершенно не в состоянии открыть глаза.
</p>
<p>
    Снег ослепил вас. Остается только сидеть и ждать,
пока слепота не пройдет. Если бы вы продолжали свой
путь прямо сейчас, то вскоре заблудились бы и погибли. Пока вы ждете, холод пронизывает вас все глубже
и глубже до самых костей.
</p>

<?php if($this->character->hasItem(ItemsLibrary::BURREK)): ?>
<p>У вас есть буррек, вы прижимаетесь к нему и согреваетесь теплом его тела</p>
<p class="font-italic">
    (-2 здоровья)
</p>
<?php else: ?>
<p class="font-italic">
    (-3 здоровья)
</p>
<?php endif; ?>

<?php if(!$this->character->hasItem(ItemsLibrary::FUR_COAT) || !$this->character->hasItem(ItemsLibrary::WARM_CLOTH)): ?>
<p>У Вас нет теплой одежды</p>
<p class="font-italic">
    (-1 здоровья)
</p>
<?php endif; ?>
<?php
$this->attachCalculations(function ($event, \app\models\GamePage $gamePage){
    $add = -3;
    if($gamePage->character->hasItem(ItemsLibrary::BURREK)) $add++;
    if(!$gamePage->character->hasItem(ItemsLibrary::WARM_CLOTH)
        && !$gamePage->character->hasItem(ItemsLibrary::FUR_COAT)) $add--;

    $gamePage->character->addHealth($add);
});

$this->attachDynamicAnswers(function ($event, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        'Продолжить...',
        $gamePage->character->health > 0?'13_1':'end_health'
    );
});
