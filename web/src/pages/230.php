<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Пока близнецы общаются, вы сканируете возникающие у них мысли. Это воспоминания о пивной
во Флориде, помехах на видеоэкране, соблазнительном сообщении о мощности, заключенной в Сердце
Волента. Как и вы, они слышали передачу от Глоси.
Они пересекли Атлантический океан, чтобы добраться сюда. Можно не сомневаться — они направляются
в Дью-Эн.
</p>
<p>
    Вы почти заканчиваете ментальную проверку,
когда мелькает другое воспоминание, удивляющее
вас. Близнецы нашли старый компьютерный комплекс
в Мадейре и смогли снова связаться с Глоси. В этот
раз она была более вразумительной и сказала им, что
Сердце опасно. Если найдется человек, который воспользуется его мощью, Вселенная в том виде, как она
есть сейчас, перестанет существовать и будет пересоздана заново.
</p>
<p>
    Близнецы по-видимому сделали вывод, что Сердце должно быть уничтожено. Глоси сообщила им, что
это можно осуществить с помощью двух направленных
под прямым углом бризальных лучей, которые вызовут
внутренний дисбаланс. Затем Сердце должно разлететься на куски, как стекло, разбитое очень высоким
звуком.
</p>
<p>
    Одна из сестер поднимает взгляд. Вы с виноватым видом успеваете отвести свой ментальный сканер
в сторону до того, как она замечает, что вы наблюдаете за ними.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::NEMESIS);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 252);

});