<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasItem(\app\library\ItemsLibrary::CYBORG_PARTS) ? 4 : 1;
?>
<p>
    Что-то свистит в воздухе, и раздается звук, как
будто нож вонзился в яблоко. Вы с удивлением видите, как арбалетный болт пронзает глаз Сингха. Уже
мертвый, он разворачивается от удара и сотрясает
пол, выпуская случайный выстрел из мантрамукты
при падении. Взлетают оплавленные куски мрамора,
и один из них сильно бьет вас по левой руке.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Когда дым рассеивается, вы видите, что Голгот
прикрепил свой пистолет магнитом к стене для дистанционного огня. Он извлекает его и бросает на вас
настороженный взгляд. «Теперь все в наших руках,—
говорит он.— Мы можем решить вопрос перестрелкой
и возможно оба погибнем, или мы можем объединиться, чтобы избавиться от него». Он показывает пальцем
на зловеще сияющее Сердце Волента.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 431 : 'end_health');

});