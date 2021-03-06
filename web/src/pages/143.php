<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Было бы нечестно утверждать, что я знаю точный
ответ на этот вопрос,— заявляет Бадор.— Некоторые
считают, что название города происходит от «Кхаре-О» или «Поля битвы», поскольку он был основан на
месте, где первый фараон наблюдал сражение сокола и крысы. Другая версия отсылает нас к поселению
эль-Кахира, посвященному красной планете победы»
</p>
<p>
    Вы мотаете головой. «Это древние мифы. Меня интересует недавняя история».
</p>
<p>
    «Ага. Итак, когда Дью-Эн начал набирать мощь,
Кахира стала важна, как база для операций тех, чьи
армии противостояли Свидетелям Волента — по сути,
всего остального мира. Благодаря трубам отопления,
проложенным вдоль русла Изиды, здесь даже в эти
трудные времена в изобилии водится рыба, и Кахира продолжает процветать. Теплая вода, соприкасаясь
с ледяными ветрами Сахарской равнины, образует
постоянный туман, который является отличительной
чертой города».
</p>
<p>
    «А почему город построили на высоких бетонных
опорах, а не на берегах реки?»
</p>
<p>
    На лице Бадора появляется неопределенное выражение.
</p>
<p>
    «Для защиты? Из-за нехватки материалов? По тайному приказу? Кто знает».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Спросить его о Сахаре', 77);
    $gamePage->addAnswer('Спросить его о Гизе', 59);
    $gamePage->addAnswer('Попросить совета, где лучше остановиться на ночь ', 99);
    $gamePage->addAnswer('Уйти', 95);

});