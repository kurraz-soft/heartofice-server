<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы нажимаете красную кнопку. Коробка издает
протяжный гудок, повышающийся в тоне и заканчивающийся звонком. «Готово»,— произносит синтетический женский голос из динамика.
</p>
<p>
    Оказавшись на мгновение захваченным врасплох,
вы наклоняетесь поближе, осторожно спрашивая:
«Э… Готово для чего?»
</p>
<p>
   «Поясните,— решительно произносит голос из коробки,— Ваш запрос неустановлен».
</p>
<p>
    «Это радио? С кем я разговариваю?»
</p>
<p>
    «Я миниатюрная копия Глобального Сообщества
Искусственного Интеллекта»,— отвечает устройство.
</p>
<p>
    «Глоси? Но Глоси безумна».
</p>
<p>
    «Программа Глоси была загружена в меня еще до
вирусного заражения. Я способна моделировать мыслительные процессы Глоси в ограниченном режиме
по причине малого объема памяти, который в данный
момент составляет 512 гигабайт»
</p>
<p>
    «Что ты можешь рассказать мне о Сердце Волента?»
</p>
<p>
    «Ничего. Такая информация не загружалась
в мою память». Резкий голос устройства раздражает,
однако если оно наделено хотя бы частью интеллекта
Глоси, оно может быть полезным. <span class="font-italic">(Теперь у вас есть Мини-Глоси)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addToInventory(\app\library\ItemsLibrary::MINI_GLOSY);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Поискать в лаборатории другое снаряжение', 80);
    $gamePage->addAnswer('Спуститься на нижний уровень пирамиды', 255);
    $gamePage->addAnswer('Покинуть пирамиду', 361);
});