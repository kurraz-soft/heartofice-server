<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Проект «Глобальное Сообщество Искусственного Интеллекта» расположен на Исследовательском
уровне прямо над нами,— отвечает голос.— Текущий
статус проекта — в режиме ожидания. Пожалуйста,
поднимитесь на транспортный диск».
</p>
<p>
    Пребывая в благоговении перед наукой, которая
могла создать устройство, способное давать столь разумные ответы, вы выполняете указание. Платформа
поднимается на уровень выше.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 276);

});