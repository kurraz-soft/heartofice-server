<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Наконец, устрашающие близнецы начинают проявлять признаки усталости. Они заказывают тушеное
мясо, которое с удовольствием поглощают, а потом
вламываются в общую спальню, где бросаются на койки и вскоре уже храпят как две львицы.
</p>
<p>
    «Что за жуткие фурии! — печально шепчет хозяин постоялого двора.— Они выпили водки на сотню
скадов. Но думаю, что вряд ли получу свои деньги».
</p>
<p>
    Другие постояльцы располагаются на ночлег на
полу бара. Никто не смеет разделить спальню с Гарганскими сестрами, опасаясь, что те могут проснутьсяи наброситься в пьяном гневе. Вы не вините их. Вы
сами проводите тяжелую ночь и рано встаете, чтобы
отправиться в путь.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 273);

});