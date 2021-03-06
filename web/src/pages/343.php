<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вы торопитесь вслед за Сингхом и рассказываете
ему о предупреждении Глоси. Сначала он не проявляет интереса, но постепенно смысл ваших слов начинает доходить до него. Он останавливается, оборачивается и смотрит вам в глаза. «Ты предлагаешь
объединиться»,— говорит он.
</p>
<p>
    «Это разумно. Если мы будем союзниками, то
почти наверняка победим остальных и доберемся до
Сердца. Завтра ты пойдешь с бароном Сириазисом,
а я с Голготом. Они наши самые опасные противники.
Если представится случай, нужно убить их».
</p>
<p>
    «Что если вы найдете Сердце раньше? Или я со
своими спутниками?»
</p>
<p>
    «Я клянусь тебе не использовать его мощь, пока
не останемся только мы с тобой. А потом мы обсудим
будущее Вселенной».
</p>
<p>
    Вы наблюдаете, как он возвращается в свою палатку. Вы уверены, что Сингх сдержит клятву — если
конечно у вас не закрадывается подозрение, что вы
просто привязали себя к хвосту льва.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::RED);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 192);

});