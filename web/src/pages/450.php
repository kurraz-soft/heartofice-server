<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 1;
?>
<p>
    «Я не твой слуга, барон. Мы партнеры, помнишь?»
</p>
<p>
    Он разворачивается в воздухе, посылая вам
взгляд, полный величественного гнева. Вы понимаете, что он почти готов применить свои телепатические
способности. «Вот и развязка…» — успеваете подумать вы, отступая.
</p>
<p>
    Внезапно все озаряется светом, и взрыв сотрясает толстые каменные стены, рассеивая повсюду пыль
и дым. Вас бросает на пол.
</p>
<p>
    (-<?= $spend_health ?> здоровья)
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Медленно помотав
головой для прояснения, вы оглядываетесь и обнаруживаете, что одна из колонн рухнула. Каменная пыль
просачивается сквозь трещины в куполе. Услышав
чей-то кашель, вы понимаете, что Боше жив, но оглушен. Взрыв отбросил его на другую сторону зала. Рядом, под расколовшимся куском каменной кладки, вы
видите изуродованные и окровавленные останки.
</p>
<p>
    Вы с трудом встаете, подходите и спотыкаетесь
об оторванную руку, скривившись от отвращения.
</p>
<p>
    Сердце замирает, когда вы слышите скрежет камня о камень. Парализованный страхом, вы смотрите,
как обломок кладки сдвигается, поднимаясь сам собой. То, что осталось под ним не поддается описанию.
Хуже всего то, что Это поднимается в воздух: окровавленный человеческий мозг с частями позвоночника.
</p>
<p>
    Телепатическое сообщение пронзает ваш разум:
«Пока сила мысли при мне, я все еще могу действовать. Подойди ближе, мой друг. Я возьму твое молодое здоровое тело…»
</p>
<p>
    Это барон — или то, что осталось от него.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->addHealth(-$spend_health);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->health > 0)
    {
        $gamePage->addAnswer('Отступить туда, откуда пришли', 107);

        if($gamePage->character->hasLoadedFirearm())
            $gamePage->addAnswer('Открыть огонь из пистолета', 63);

        $gamePage->addAnswer('Остаться на месте', 85);
        $gamePage->addAnswer('Попробовать проскользнуть в туннели на другой стороне', 129);
    }else
        $gamePage->addAnswer('Продолжить...', 'end_health');

});