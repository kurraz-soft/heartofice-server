<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
   Вы пытаетесь ударить его ногой по голове. Он
блокирует удар предплечьем. Ощущение такое, как
будто вам врезали по голени бейсбольной битой. Вы
не успеваете уловить движение его огромного кулака,
который с хрустом врезается вам в переносицу…
</p>
<p>
    Вы приходите в себя через несколько минут. Вы
смутно понимаете, что больше не стоите на ногах.
Фиджиец взвалил вас на плечи. Вы поворачиваете
голову и видите окутанные туманом уличные фонари
в восьмидесяти метрах внизу.
</p>
<p>
    «Не стоило убивать моего босса»,— тихо говорит
фиджиец. Потом он сбрасывает вас вниз навстречу
неминуемой гибели.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец', 'end_empty');

});