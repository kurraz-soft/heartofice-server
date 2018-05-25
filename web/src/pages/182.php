<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    К счастью вам удалось найти следующий отрывок:
</p>
<p>
    «Выдержки из допроса Элезара Пикарда, лидера и единственного выжившего из культа Волента, 16
Июля 2113 года; допрос проведен полковником Мехметом Алишахом из эль-Лата:
</p>
<p>
    Пикард: Это был свет конца Времен, и мой рассудок ослеп!<br />
    Алишах: Как ты сбежал? Ты один и больше никто?<br />
    Пикард: Я помнил Истину.<br />
    Алишах: Что есть Истина?<br />
    Пикард (цитирует): «Истина это пламя. Что разжигает пламя? Искра разжигает пламя. Что есть искра? Сердце Волента!»<br />
</p>
<p>
    Вы пролистываете еще несколько книг. Элезар
Пикард был основателем секты, поклонявшейся Сердцу Волента две сотни лет назад. Он и шестеро других
управляли Дью-Эном — до ночи 15 Июля 2113 года,
когда все население города обезумело и бежало в Ледяные пустоши Сахары.
</p>
<p>
    С тех пор Дью-Эн остается покинутым. Вы изучаете другие детали: Пикард умер, продолжая бредить,
всего через несколько часов после того, как был опрошен полковником Алишахом.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::MOON);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::NEMESIS)
        && !$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::HUMBABA)
    )
    {
        $gamePage->addAnswer('Попытаться связаться с Глоси', $gamePage->character->hasSkill(\app\library\SkillsLibrary::CYBERNETIC) ? 116 : 138);
    }

    $gamePage->addAnswer('Закончить', 73);

});