<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы собираете по кусочкам мозаику из легенд, суеверий и исторических фактов. Сердце упало с неба:
неземной драгоценный камень, который стал средоточием секты безумцев. Секта использовала его сверхъестественную мощь в Войне парадокса. Сейчас Сердце
погребено под руинами Дью-Эна, и тот, кто отыщет
его, станет самым могущественным человеком в истории
</p>
<p>
    «Почему тогда пала цивилизация Дью-Эна?»,—
спрашиваете вы у ученого в библиотеке.
</p>
<p>
    «Его правители обезумели. Никто не может владеть такой мощью и остаться в здравом рассудке».
</p>
<p>
    «Ты знаешь это точно, или это только твоя теория?»
</p>
<p>
    Но он лишь загадочно улыбается в ответ.
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE))
        $gamePage->addAnswer('Продолжить...', 157);
    elseif ($gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE))
        $gamePage->addAnswer('Продолжить...', 414);
    else
        $gamePage->addAnswer('Продолжить...', 25);

});