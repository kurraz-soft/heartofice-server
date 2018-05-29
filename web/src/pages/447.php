<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Оружейная — это небольшое, но сильное заставленное помещение в подвале. Изможденный человек
в белом комбинезоне подходит к вам, шаркая по полу
из серых плиток, и спрашивает о ваших пожеланиях.
Похоже, что члены Общества могут брать оружие, если
подписана платежная записка. Так как эти записки
хранятся на счете предыдущего владельца ИД-карты,которому деньги теперь не нужны, вы можете выбрать
то, что захотите.
</p>
<p>
    Оружейник показывает вам шкаф, заваленный
бризальными пистолетами. «У нас также есть арбалеты, для тех, кто предпочитает простоту оружия, а не
грубую силу».
</p>
<p>
    «Что она сказала ему?»
</p>
<p>
    «Глоси сообщила, что Сердце нестабильно. Оно
даст тому, кто использует его, предельную мощь, но
только ценой уничтожения нашей Вселенной и создания новой на ее месте».
</p>
<p>
    «И что ответил барон?»
</p>
<p>
    «Ему все равно. Он страдает от своего возраста
и увечья. Он будет счастлив, став правителем новой
Вселенной». Мини-Глоси продолжает, сообщая вам,
как можно уничтожить Сердце: его надо обстрелять
двумя бризальными лучами под прямым углом, что вызовет резонанс в кристаллической решетке, который
расколет его на части.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::GUN, 6, 0, 5);
$inv->add(\app\library\ItemsLibrary::CROSSBOW, 1, 0, 5);
$inv->add(\app\library\ItemsLibrary::KNIFE, 1, 0, 5);
$inv->add(\app\library\ItemsLibrary::SOUND_GRENADE, 1, 0, 5);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 73);

});