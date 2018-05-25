<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Легкого шелеста листьев над головой достаточно,
чтобы вы почувствовали опасность. Открыв глаза, вы
видите узкую клиновидную голову, свисающую с ветки. В широкой красной пасти видны острые, как кинжалы, клыки.
</p>
<p>
   Мгновенно среагировав, вы перелетаете через
бревно за до секунду того, как клыки этой твари вонзаются в землю там, где вы только что лежали. Шипя
и отплевываясь от земли и веток, она отползает назад. Голова твари, покачивающаяся на длинной серой
шее, снова бросается вперед. Увернувшись, вы хватаете лежащие на земле вещи и бросаетесь прочь сквозь
деревья.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 228);
});