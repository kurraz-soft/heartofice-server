<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Осматриваясь в поисках средства открыть дверь,
вы замечаете клавиатуру, вделанную в нишу рядом
с дверью. Пока вы счищаете наледь, вам приходит
в голову, что должно быть прошли сотни лет с того
момента, как дверь открывали в последний раз.
</p>
<p>
    Существуют миллиарды возможных комбинаций,
но тот, кто использовал клавиатуру, должен был знать
верную последовательность набора.
</p>
<p>
    Вы закрываете глаза, фокусируя внутреннее телепатическое видение, которое выходит за пределы
привычной реальности. Пелена времени отодвигается. На мгновение вы видите человека в военной форме давних времен, который нетерпеливо бьет по клавишам именно этой клавиатуры.
</p>
<p>
    Изображение дрожит, расплываясь как дым. Затаив дыхание, вы вводите последовательность, которую как вам показалось, использовал солдат:
</p>
<p>
    «Х-У-М-Б-А-Б-А».
</p>
<p>
    Раздается треск льда, когда дверь поднимается,
пропуская вас внутрь.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 233);

});