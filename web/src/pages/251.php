<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Городские ворота — это металлические створки большого грузоподъемника у подножия бетонной
опоры. Остальные пассажиры вышли на первой же
остановке — нижнем уровне улиц. Двадцатью метрами выше вы быстро проходите в ворота, чудом успев
до вечернего закрытия. Как только вы выходите на
улицу, то сразу привлекаете внимание человека в сине-серой форме.
</p>
<p>
    «Чейм Голгот! Ты все еще наемный убийца?» —
отвечает Боше с нотками бравады в голосе. Он поворачивается к вам: «Этот человек живет убийствами».
</p>
<p>
    Вы замечаете знаки отличия на рукаве Голгота:
украшенный гербами серебряный орел и синие звезды Разведки Соединенных Штатов. Даже когда мир
на краю гибели, Соединенные Штаты остаются силой,
с которой приходится считаться. Если Голгот действительно убийца РСШ, Боше играет с огнем, подтрунивая над ним.
</p>
<p>
    Вы оцениваете потенциального противника.
У Голгота есть убранный в кобуру бризальный пистолет и, к вашему удивлению, стальной арбалет, прицепленный на ремень позади бедра. С первого взгляда
он выглядит открытым и дружелюбным человеком, его
голос — спокойный, с хрипотцой. Но есть что-то ледяное в его взгляде. Это глаза человека, никогда не
теряющего бдительности.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PSY) && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER))
        $gamePage->addAnswer('Покопаться в мыслях Голгота', 121);

    $gamePage->addAnswer('Спросить его о Гизе', 337);
    $gamePage->addAnswer('Спросить его о том, зачем ему арбалет', 315);
    $gamePage->addAnswer('Пройти мимо него в город', 358);

});