<?php
/**
 * @var \app\models\GamePage $this
 */
?>

<p>
    Из-за тумана здание по ту сторону плазы выглядит, словно вырез кружев на фоне ночного неба. Вы
пересекаете линию фонарей под колоннадой, ваши шаги звонко отдаются от скользкой мостовой. Дойдя
до торговых рядов и лавок, вы ищите ответ на свой вопрос. «Иди к Пиндару Копту,— советует лавочник,
указывая на широкую дверь в конце колоннады.— Он знает разгадку всех тайн».
</p>
<p>
    Похоже, Пиндар — это местный гадатель и рассказчик. Вы некоторое время стоите возле его двери, разглядывая потускневшую бронзовую табличку,
после чего заходите внутрь. Комната увешана яркими коврами, воздух пахнет плесенью и ладаном. Три
древних старца смотрят на вас, посасывая мундштуки кальяна. Не спрашивая о причине визита, они указывают вам на подушку.
</p>
<p>
    Вы садитесь: «Расскажите мне о Сфинксе».
</p>
<p>
    «Она загадывала загадки всем прохожим и пожирала тех, кто не мог ответить»,— говорит один из стариков.
</p>
<p>
    «Ответом на ее загадку был сам Человек»,— добавляет второй.
</p>
<p>
    В разговор вступает Пиндар. «Это греческая версия Сфинкса. Египетский Сфинкс мужчина. Он сидит
у Гизы и следит за Кахирой, не давая снегам Сахары завалить город».
</p>
<p>
    Вы улыбаетесь: «Это всего лишь сказки».
</p>
<p>
    «Только не последняя часть,— настаивает Пиндар.— Под Сфинксом был установлен атомный реактор, он питает обогревающие элементы, которые
хранят реку Изиду от замерзания. Тот же реактор, возможно, до сих пор питает военный комплекс внутри Великой пирамиды».
</p>
<p>
    Вы пристально смотрите на него и говорите: «Похоже, ты хорошо информирован».
</p>
<p>
    «Я прожил долгую жизнь. Если тебе интересно, то ответ на загадку Сфинкса в наши дни — ‘Хумбаба’».
</p>

<?php
$this->addAnswer(
        'Продолжить...',
        $this->character->hasKeyword(\app\library\SkillsLibrary::KNOWLEDGE)?95:311,
        function ($event, \app\models\GamePage $gamePage){
            $gamePage->character->addKeyword(\app\library\KeywordsLibrary::HUMBABA);
        });
?>
