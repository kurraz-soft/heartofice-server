<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы посмотрели на руку Боше, но не пожали ее.
В эти дни, когда человечество находится на грани вымирания, вы научились остерегаться незнакомцев. «Я пойду один».
</p>
<p>
    Боше не теряется. «Пойдем, здесь небезопасно,—
говорит он.— Я же оплатил твой счет».
</p>
<p>
    «Я не просил тебя об этом. Хозяин, верни этому
человеку его деньги. Я расплачусь самостоятельно».
</p>
<p>
    Ваш счет за проведенную ночь составляет 3 скада.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    $gamePage->addAnswer('Оплатить', 67, function ($e, \app\models\GamePage $gamePage){
        $gamePage->character->spendMoney(3);
    });

    $gamePage->addAnswer('Передумать', 23);
});