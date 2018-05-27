<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Кахиру заволокло туманом, который поднимается от теплых речных вод, протекающих под городом.
Городские ворота — это металлические створки большого грузоподъемника у подножия бетонной опоры.
Вы быстро проходите в них, чудом успев до вечернего закрытия. Стоя в толпе людей, ослов и верблюдов, вы поднимаетесь на грохочущем подъемнике на
уровень улиц, где он открывается, чтобы извергнуть
пассажиров на затянутую туманом площадь. Вы выходите из-под пронизывающего света неоновых ламп
и оглядываете площадь, не обращая внимания на проталкивающихся мимо вас последних пассажиров со
своим багажом. Бормочущие голоса приглушенно звучат в тумане. Воздух сырой и холодный, с неприятной
примесью тумана и запаха влажного бетона.
</p>
<p>
    Потирая руки, к вам подбегает человек в светящейся феске. Когда он кланяется, в уличном освещении вспыхивает оскал искривленных зубов. «Приветствую! Я Бадор, человек-дракон. Всего за один скад
я буду рад помочь вам со многими вопросами в этом
достойном городе».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->money >= 1)
        $gamePage->addAnswer('Заплатить', 33, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->spendMoney(1);
        });
    $gamePage->addAnswer('Прогнать его', 95);

});