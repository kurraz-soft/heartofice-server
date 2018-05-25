<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Что это? Что это?»
</p>
<p>
    Вы мгновенно поднимаетесь и оглядываетесь.
Звук, который вы услышали, очень странный: как будто человеческий, но не совсем. Нервно передернувшись, вы осматриваете подлесок
</p>
<p>
    Зубы впиваются в ваше плечо, и вы кричите от
боли и неожиданности. Как оказалось, вас атаковали
сверху. <span class="font-italic">(-1 здоровья)</span>. Вы поднимаете глаза, чтобы увидеть напавшего на вас жуткого зверя. Его тело представляет собой «палатку» из кожаных
крыльев, натянутую между ветвей. Узкая морда, наполненная острыми зубами, покачивается на длинной
шее. Зверь смотрит на вас маленькими блестящими
глазами и вновь кричит: «Что это?
</p>
<p>
    Ничего хорошего, это точно.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addHealth(-1);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
        && $gamePage->character->inventory[\app\library\ItemsLibrary::GUN]->count
    )
        $gamePage->addAnswer('Использовать пистолет', 96);
    else
        $gamePage->addAnswer('Продолжить...', 118);

});