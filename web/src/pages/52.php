<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Лифт доезжает до первого этажа, и двери раскрываются. Вы выходите и оказываетесь прямо перед
группой людей с винтовками в форме охранников.
«Ты нелегально получил карту Общества Компаса»,—
рычит начальник охраны, на его лице появляется волчья ухмылка
</p>
<p>
   «Позвольте мне объяснить…» — начинаете вы,
но он лишь качает головой. «Объясни это солдатам.
А еще лучше — ангелам». Он щелкает пальцами, давая
сигнал своим людям, и ураганный огонь обрушивается
на вас…
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Конец', 'end_empty');
});