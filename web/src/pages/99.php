<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Он подчеркивает, что вы ни в коем случае не
должны ночевать в Монастырском парке. «Там небезопасно после захода солнца,— говорит он, грозя пальцем.— Клаустралов и так нелегко удержать от выхода
на улицы».
</p>
<p>
    «Кто такие клаустралы?».
</p>
<p>
    Он отпрыгивает в преувеличенном удивлении.
«Ты правда не знаешь? Это разновидность демонов —
созданий, противоположных людям. Они процветают
в темноте, холоде и грязи; они отвергают солнечный
свет и добро. Они питаются разлагающейся плотью
мертвых». Его жирные щеки дрожат от страха.
</p>
<p>
    «Разлагающейся плотью? Тогда зачем им преследовать живых людей? Возможно, эти клаустралы просто сказочный вымысел!».
</p>
<p>
    Он грустно смотрит на вас, как на человека, который лишился рассудка. «Не позволяй своему цинизму
завлечь тебя в парк»,— продолжает он.
</p>
<p>
    «Тогда где мне стоит остановиться?»
</p>
<p>
    «Лучше всего в отеле «Оссиман». Если ты не можешь позволить себе гостиницу, избегай задворок, там
прячутся грабители. Если придется, ночуй у решеток
Площади рыбного рынка — там много света, тепло
и людно всю ночь».
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Спросить его о Сахаре', 77);
    $gamePage->addAnswer('... о Гизе', 59);
    $gamePage->addAnswer('... о Кахире', 143);
    $gamePage->addAnswer('Попрощаться', 95);
});