<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Лаборатория занимает весь зал. Вдоль одной из
стен стоит ряд компьютеров. Скамьи усыпаны электронным оборудованием, функции которого вы не можете даже предположить. Большая его часть выглядитполусобранной.
На одной скамье, рядом с металлическим ящиком вы замечаете пустую кофейную чашку.
Выглядит все это так, будто база была эвакуирована
второпях.
</p>
<p>
    Вы наклоняетесь, чтобы осмотреть металлическую
коробку. Она похожа на коммуникатор с видеоэкраном, микрофоном и множеством кнопок на одной из
сторон. Вы предполагаете, что выступающая красная
кнопка сбоку приведет устройство в действие. Независимо от того, что это.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        'Использовать компьютеры, чтобы связаться с Глоси',
        12
    );
    $gamePage->addAnswer(
        'Включить устройство',
        57
    );
    $gamePage->addAnswer(
        'Потратить время на более тщательное обследование лаборатории',
        80
    );
    $gamePage->addAnswer(
        'Спуститься к военному уровню',
        255
    );
    $gamePage->addAnswer(
        'Покинуть пирамиду',
        361
    );
});