<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Идентификация цели: бомет»,— произносит
Гильгамеш.— Мутант, гибрид волка и медведя. Хищник. Представляет опасность. Требуется немедленное
уничтожение». Он поднимает руку, выпуская потрескивающий сгусток энергии, который превращает сумерки в ясный день. Кружащиеся снежинки с шипением испаряются.
</p>
<p>
    Гигантский зверь на гребне склона содрогается
и падает, скатываясь в глубокий снег внизу. С Гильгамешем, топающим за спиной, вы подбегаете к бомету
убедиться, что он мертв, поскольку не желаете, чтобы
раненный хищник преследовал вас в ночи.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 341);

});