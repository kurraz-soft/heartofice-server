<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Кажется, ваши предположения оправдываются —
лишь мельком взглянув на фото, он прокатывает карту
через терминал и возвращает вам. С льстивой улыбкой
на худом лице он показывает вам, где лифт и говорит:«Сейчас тут нет никого из членов Общества. Спокойно наслаждайтесь всем удобствами».
</p>
<p>
    Кивнув в знак благодарности, вы подходите
к лифту и смотрите на панель с кнопками.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Отправиться в библиотеку', 6);
    $gamePage->addAnswer('... в медпункт', 28);
    $gamePage->addAnswer('... в спортивный зал', 51);
    $gamePage->addAnswer('... в оружейную', 447);
    $gamePage->addAnswer('... в столовую', 94);

});