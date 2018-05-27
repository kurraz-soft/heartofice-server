<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Если верить Глоси, освобождение энергии Сердца будет смертным приговором для всего живого. Но
стоит ли ей верить? Или доверять, если на то пошло?
Глоси — это даже не «она», а «оно» — лишь искусственный интеллект, внедренный в компьютерную
сеть. И в придачу страдающий шизофренией из-за
сложных компьютерных вирусов, внедрившихся в ее программы.
</p>
<p>
    Вы должны полагаться на собственное мнение.
Если вы думаете, что Сердце должно быть уничтожено, вам нужно найти соратника, который поможет это
сделать. Вы с сомнением смотрите на лица, залитые светом костров. По самой своей природе, это самые
безжалостные и решительные искатели приключений
вашего времени. Сможете ли вы заставить их поверить
вам? Или вам стоит забыть о страшном предупреждении Глоси и просто попытаться получить Сердце
в свое распоряжение?
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $has_psy = $gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY) && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER);

    $gamePage->addAnswer('Продолжить...', $has_psy ? 152 : 82);

});