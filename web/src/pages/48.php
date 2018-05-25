<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы наклоняетесь, чтобы расспросить его. Нож валяется рядом, но он, страдая от дикой боли, и не помышляет о сопротивлении. Он смотрит на вас сквозь
пальцы, лицо и глаза у него ужасно ошпарены.
</p>
<p>
    «Кто вы такие?» — спрашиваете вы.— Почему пытались меня убить?»
</p>
<p>
    «Похитители тел,— отвечает он, скрипя зубами от боли.— Любой здоровый незнакомец — отличный
заработок в этой части города»
</p>
<p>
    Похитители тел поставляют органы для пересадок. Вы знаете, что на черном рынке за здоровое
сердце, печень или почку предлагают неплохую цену,
и покупатель никогда не задает вопросов, откуда и каким образом появился донорский орган. Это грязная,
мерзкая работа, презираемая даже в среде грабителей и насильников.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE))
        $gamePage->addAnswer('Продолжить...', 114);
    elseif ($gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER))
        $gamePage->addAnswer('Продолжить...', 136);
    else
        $gamePage->addAnswer('Продолжить...', 92);

});