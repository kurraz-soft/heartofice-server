<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Площадь рыбного рынка на самом нижнем уровне
города — это широкое мощеное пространство, окружающее покрытую решетками зону над рекой. Ночью
решетки открываются и туда забрасывают сети. Яркие лампы светят прямо на реку, привлекая внимание
рыбы, которую затем вытаскивают целыми живыми косяками. Ловля продолжается всю ночь, и перспектива
поесть свежезажаренной рыбы приводит на площадь
всех ночных работников. У прилавков, окружающих
решетки, толкаются вместе полисмены после дежурства, рыбаки, проститутки, уборщики улиц, нищие
и воры.
</p>
<p>
    Вы пристраиваетесь рядом с закрытым прилавком
кондитерских изделий. Яркий свет и суматоха мешают
спать, но по крайней мере вы защищены от грабителей. Вы проводите беспокойную ночь, поднимаясь до
рассвета, в глаза как будто насыпали песка, конечности затекли. «Убирайся отсюда! — говорит владелец
прилавка, открывая его.— Не хватало, чтобы из-за какого-то нищего мои товары покрылись вшами».
</p>
<p>
    Вы ждете, пока он отвернется, чтобы украсть булочку на завтрак, и затем отправляетесь на базар.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 333);

});