<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasItem(\app\library\ItemsLibrary::BULLETPROOF_VEST) ? 1 : 2;
?>
<p>
    Вы попадаете Сингху в руку, он ошатывается, но
хотя рана серьезная, он еще далеко не побежден. Он
нажимает на спуск своей мантрамукты, одновременно
с ответным выстрелом Боше.
</p>
<p>
    Луч Боше попадает вам в плечо <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>, и секундой позже он падает, сраженный потоком
энергии из пушки Сингха.
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    После выстрела наступает момент затишья. У вас
есть несколько секунд, пока Сингх будет перезаряжать
свою пушку, но и Голгот с бризальным пистолетом не
будет терять время зря. Именно в эти секунды решается, кто из вас получит Сердце.
</p>
<?php endif; ?>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 410 : 'end_health');

});