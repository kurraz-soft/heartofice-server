<?php
/**
 * @var \app\models\GamePage $this
 */

?>
<p>
    С широкой глуповатой улыбкой жрица и ее последователи принимают ваше пожертвование. Вы должны отдать им все свои деньги. Если у вас нет денег,
вам придется отдать любые две вещи на свой выбор.
«Спасибо, странник,— говорит жрица.— Богиня будет присматривать за тобой».
</p>
<p>
    «Да дарует она вам столько удачи, сколько, я полагаю, вы заслужили,— двусмысленно отвечаете вы.— А теперь, если вы не против, я хотел бы немного поспать».
</p>
<p>
    Вы устраиваетесь среди мусора, однако сон так
и не приходит — в вас кипит ярость после столь дерзкого ограбления. Поскольку солнце уже начинает
играть жемчужными красками на городских шпилях,
вы оставляете попытки уснуть и направляетесь на базар.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 333);

});