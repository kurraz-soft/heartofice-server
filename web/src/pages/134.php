<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Монстр устроил себе логово в пещере в конце
прохода. Внутри вы находите тлеющие куски торфа,
вокруг которых разбросаны обглоданные кости людей и крупных животных. Похоже, он погружал свою
добычу в гипнотический транс и оставлял умирать на
холоде.
</p>
<p>
    Когда ему нужна была свежая еда, он просто
брал замороженное тело на перевале — жуткий, но
эффективный способ. Война парадокса одарила мир
множеством странных мутаций.
</p>
<p>
    Боше издает непроизвольный возглас отвращения, который сменяется нервным смехом. Он нашел
детенышей монстра: бесформенные головы, похожие
на гнилые помидоры, сморщенные тела, желтые грозди глаз, висящие на недоразвитых стеблях.
</p>
<p>
    «Милые маленькие дьяволы»,— говорит он.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Убить их', 156);
    $gamePage->addAnswer('Оставить в покое', 178);

});