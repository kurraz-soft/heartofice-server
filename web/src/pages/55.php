<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    На экране появляется набор непонятных команд,
и компьютер блокируется. Вы пытаетесь перезагрузить его, но напрасно. Пожав плечами, вы начинаете
исследовать остальную часть пирамиды, праздно задаваясь вопросом, что же именно сделала Глоси, когда
взяла под управление местную компьютерную сеть.
</p>
<p>
    Ответ приходит так внезапно, что вы не успеваете его осознать. Очередной приступ безумия владел
Глоси, когда вы вышли с ней на связь. Она перехватила управление ядерным реактором, питающим пирамиду, и перегрузила его. Внезапно поток плазмы вырывается из земли. В течение краткой ослепительной
секунды все выглядит как до наступления ледникового
периода — пирамида Хеопса вновь стоит в слепящем
свете посреди раскаленных песков.
</p>
<p>
    Взрывная волна сметает пирамиды, простоявшие
здесь пятьдесят веков, испаряя снег и лед, покрывающий пустыню, превращая скалы в лаву, реку — в пар,
а Кахиру — в выжженные руины. Посреди этого ада
ваша собственная смерть остается никем не незамеченной.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Конец', 'end_empty');
});