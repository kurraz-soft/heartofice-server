<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    С помощью громадного ментального усилия вы
выясняете, что можете подвинуть облако пара в центр
комнаты, оставив более холодный воздух в парной.
Вы сосредотачиваетесь на формировании воронки из
пара, и постепенно маленький вихрь возникает в воздухе перед вами. Вращаясь все быстрее, он истончается. В своем разуме вы формируете его, как горшок
на гончарном колесе.
</p>
<p>
    Один из убийц заглядывает в окошко. «Что происходит, черт возьми?» — кричит он. Они пытаются открыть защелку двери, но вы этого практически
не замечаете. Сейчас все ваши силы направлены на
шипящую воронку обжигающего пара.
</p>
<p>
    Дверь открывается. Два человека застывают, не
веря своим глазам, ножи опускаются в их руках. Силой мысли вы направляете воронку пара к ним. Один
из них кричит, когда его поражает прямо в лицо, и падает, закрывая глаза. Другой, хоть и ошпаренный, шатаясь, заходит внутрь и пытается распороть вам живот
ножом.
</p>
<p>
    К счастью, он спотыкается на мокром полу, и удар
приходится вскользь. <span class="font-italic">(-1 здоровья)</span>
</p>
<p>
    Вы приближаетесь к нему, и в ходе короткой схватки нападающий натыкается на свой собственный нож.
Вы уверенны что он мертв, но второй все еще стонет,
лежа на полу в дверном проеме.
</p>

<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addHealth(-1);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 48);

});