<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Мы сделали это! — кричите вы.— Теперь уничтожим Сердце!»
</p>
<p>
    Но Сингх качает головой: «Глупости. Я соблюдал
наше соглашение до сего момента только, чтобы повысить шансы на успех. Теперь мы решим, кто из нас
выживет и получит власть».
</p>
<p>
    «Тяжелее с каждой битвой»,— комментируете вы,
кивая на огромную мантрамукту в его руках.
</p>
<p>
    Он отбрасывает пушку. За поясом у него торчит
оружие в форме древнего дуэльного пистолета, но
с насадкой, которая ясно указывает, что это — модифицированный лазер.
</p>
<?php
$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
        && $gamePage->character->inventory[\app\library\ItemsLibrary::GUN]->count)
    {
        $gamePage->addAnswer('Продолжить...', 284);
    }else
        $gamePage->addAnswer('Продолжить...', 305);
});