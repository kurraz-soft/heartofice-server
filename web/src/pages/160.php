<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Книги Общества мало добавили к тому, что вы
уже знали. Сердце Волента упало из космоса, это
метеорит, напоминающий фиолетовый драгоценный
камень двух метров в диаметре. Помимо шумихи, вызванной падением на Землю столь необычного тела,
также был образован мощный религиозный культ, последователи которого называли себя Свидетелями Волента. Во главе культа стоял некто Элезар Пикард.
</p>
<p>
    В процессе выявления способов управления мощью сердца, культисты полностью изменили ухудшившийся климат в небольшом регионе вокруг города
Дью-Эн, в Сахаре и какое-то время процветали.
</p>
<p>
    Затем началась Война парадокса. Свидетели Волента вовсю использовали доставшуюся им странную
власть — они организовывали взрывы, вызывающие
радиоактивный хаос в странах, погрязших, как они
считали, в коррупции и упадке. Новый Ледниковый
период шел уже полным ходом из-за неустойчивости
Глоси, и Война парадокса лишь ускорила этот процесс. Некоторые области получили такую дозу, что
естественные природные процессы там больше не существовали. Их быстро наводнили жуткие мутанты.
</p>
<p>
    Оставшаяся часть мира объединилась — совместно они построили гигантский военный бункер в Гизе,
намереваясь ударить оттуда по Дью-Эну, но необходимость в этом отпала сама собой. Жителей Дью-Эна
поразило массовое безумие, и они покинули свой город, быстро сгинув в Ледяных пустошах Сахары.
</p>
<p>
    Сам Элезар Пикард был найден патрулем из
эль-Лата, но он только бормотал что-то бессвязное
в течение нескольких дней перед смертью. Дью-Эн
был объявлен запретной территорией, а Сахара и поныне — ледяная пустошь, населенная только призраками. И так продолжается уже двести лет.
</p>
<p>
    Вы возвращаете книги на полки.
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if(!$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::NEMESIS)
        && !$gamePage->character->hasKeyword(\app\library\KeywordsLibrary::HUMBABA)
    )
    {
        $gamePage->addAnswer('Попытаться связаться с Глоси', $gamePage->character->hasSkill(\app\library\SkillsLibrary::CYBERNETIC) ? 116 : 138);
    }

    $gamePage->addAnswer('Закончить', 73);

});