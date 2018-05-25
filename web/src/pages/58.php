<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
   В этом месте вулканические газы отравляют воздух, замедляя рост деревьев вокруг оазиса и вызывая
медленную смерть всего живого. Несомненно, что те
насекомые, которые роятся в жарких потоках воздуха, мутировали, чтобы переносить здешние условия.
</p>
<p>
    Вы знаете, что продолжительное воздействие зараженного воздуха может в конечном итоге вызвать
рак, если у вас нет какой-либо защиты. В противном
случае здесь стоит оставаться, только если вы стоите
на грани гибели и настолько отчаялись восстановитьсилы, что готовы сыграть в рулетку со смертью.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::GAS_MASK)
        || $gamePage->character->hasItem(\app\library\ItemsLibrary::CYBORG_PARTS))
        $gamePage->addAnswer('Продолжить', 169);
    else {
        $gamePage->addAnswer('Остаться здесь на день или около того', 103);
        $gamePage->addAnswer('Немедленно продолжить путь', 426);
    }
});