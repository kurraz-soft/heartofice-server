<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Индикатор показывает, что впереди еще пятнадцать этажей. Около тридцати секунд. Довольно много
времени, чтобы случиться чуду, если удача на вашей
стороне. Вы очищаете разум от посторонних мыслей,
и собираете волю через пси-фокусировщик для предстоящей работы на износ.
</p>
<p>
    Индикатор показывает третий этаж. Второй.
Первый. С мелодичной трелью лифт останавливается,
и двери начинают открываться.
</p>
<p>
    Внезапно свет гаснет, не только внутри, но и на
улице, погружая холл в темноту. «Энергию отключили!» — кричит кто-то. Другой голос отдает приказ открыть огонь, и выстрелы разносят в щепки заднюю
стенку лифта, где секундой ранее находились вы.
</p>
<p>
    Двигаясь вдоль стены, вы обнаруживаете дверь
и ныряете в ночь. Спешно уходя, вы оставляете позади половину квартала, скрываетесь в долгожданном
тумане и только после этого позволяете электричеству
вновь появиться. Это была самая опасная передряга
из всех доселе выпавших на вашу долю. Придется напрягаться изо всех сил, чтобы у вас появился хотя бы
шанс завладеть Сердцем.
</p>

<?php

$this->attachDynamicAnswers(function ($event, \app\models\GamePage $gamePage){
    $gamePage->addAnswer(
        'Продолжить...',
        311
    );
});

?>
