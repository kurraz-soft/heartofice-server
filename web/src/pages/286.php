<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = $this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) ? 1 : 2;
?>
<p>
    В баре отеля вы вступаете в беседу с высокой
женщиной с колючими синими глазами по имени Тадра Бей. Судя по ее акценту, она из эль-Лата, большой
космической колонии на орбите Луны. «Я слышал, что
условия жизни на эль-Лате гораздо лучше, чем на Земле,— замечаете вы за бокалом синташа.— Но возможно, ты прилетела по делам?»
</p>
<p>
    Она отпивает из своего бокала. «То, что мне нужно, есть только здесь. На эль-Лате опасаются распространения моровой язвы, поэтому генная инженерия
запрещена. Как следствие, единственные улучшения,
которым может подвергнуться тело человека, носят
технический характер».
</p>
<p>
    «Твое тело не нуждается в каких-либо улучшениях»,— вежливо говорите вы.
</p>
<p>
    Она продолжает, не обращая никакого внимания
на вашу реплику: «Одна моя подруга вживила имплант
в зрительный нерв, чтобы определять время, лишь закрыв глаза. Устройство заклинило, и она не могла
спать, так как постоянно видела световой циферблат.
Что еще хуже, часы спешили на три минуты».
</p>
<p>
    Она осушает свой бокал и отгоняет официанта,
который пытается снова наполнить его. «Здесь, на
Земле можно получить более эффективные улучшения для тела, с помощью генетических ретровирусов.
Собственно, я ищу человека по имени Маленгин. Говорят он торгует ими».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE) ? 307 : 329);

});