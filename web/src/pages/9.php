<?php
/**
 * @var \app\models\GamePage $this
 */
?>

<p>
    Пройдя немного по одному из туннелей, вы обнаруживаете дверь. Пока Факс смотрит на вас, судорожно жестикулируя в знак протеста,
вы выбиваете дверь и входите в небольшой компьютерный зал.
Вокруг серверов, прилежно сметая пыль, ползет тех-дроид. Вы подключаетесь к компьютеру. Как вы и подозревали, он поддерживает городской генератор и системы
освещения, а также гидропонические сады, которые содержат, скорее всего, последние для этой местности запасы еды.
</p>
<p>
    Факс набирается смелости и заглядывает вам через плечо. «Что ты делаешь?»
</p>
<p>
    Ваши пальцы быстро бегают по клавиатуре. «Пытаюсь найти, есть ли работающая линия связи с внешним миром где-то в городе. А вот и она! Теперь попробуем связаться с Глоси».
</p>
<p>
    Факс жалобно ноет: «Ты в курсе, что Глоси безумна? Ты зря привлекаешь ее внимание. Она может выключить солнце!»
</p>


<?php
$this->addAnswer('Продолжить попытки связаться с Глоси', 336);
$this->addAnswer('Исследовать транспортные туннели', 439);
$this->addAnswer('Покинуть Марсей и продолжить путь на запад', 420);
?>
