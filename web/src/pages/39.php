<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
   Вы пробираетесь вниз в расщелину. Ее стены
скользкие из-за инея, и вам приходится упираться
спиной в острые скалы, чтобы не сорваться вниз. Наконец, вы видите внизу тусклый свет и оказываетесь
на уступе, с которого открывается вид на большую
подземную пещеру. Далекий вой ветра, достигающий
вашего слуха, усиливается окружающим вас обширным пространством. Тускло-серый свет исходит из
пропасти в скалах. Спустившись на дно пещеры, вы
продвигаетесь через частокол тонких сталагмитов, которые сияют как старые свечи. Барон Сириазис плывет около вас, как гротескный сломанный манекен.
Он указывает вперед: «Там пропасть. К счастью для
вас обоих, кажется через нее есть мост».
</p>
<p>
    Когда вы выходите из-за сталагмитов, вы сначала не замечаете, как плотные светящиеся испарения
поднимаются из-под ног. Боше идет к пропасти первым, но спотыкается и предупреждающе кричит, когда испарения начинают охватывать его конечности.
Барон со стоном падает и скользит ко дну пещеры.
Вы делаете еще один шаг, а затем понимаете, что мгла
высасывает ваши силы. Заволакивая взор, этот светящийся туман проникает под кожу, как ледяная вода.
Вы больше не видите своих спутников. Затем открывается вид, который пронизывает вас судорогой страха.
Вырисовываясь из тумана, к вам тянется жуткими ищущими пальцами ужасно искаженная фигура, которая
выглядит как раздавленное чучело из белесой плоти.
</p>

<?php if(
    !$this->character->hasKeyword(\app\library\KeywordsLibrary::GILGAMESH)
        && !$this->character->hasItem(\app\library\ItemsLibrary::CYBORG_PARTS)
        && !$this->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE)
): ?>
<p>
    Вы никак не сможете предотвратить прикосновение фантома к вашей
коже. Оно высасывает вашу жизненную силу, и ваше приключение подходит к концу.
</p>
<?php endif; ?>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    if($this->character->hasKeyword(\app\library\KeywordsLibrary::GILGAMESH))
        $gamePage->addAnswer(
            'Продолжить...',
            105
        );
    elseif($this->character->hasItem(\app\library\ItemsLibrary::CYBORG_PARTS))
        $gamePage->addAnswer(
            'Продолжить...',
            127
        );
    elseif ($this->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE))
        $gamePage->addAnswer(
            'Продолжить...',
            171
        );
    else
        $gamePage->addAnswer(
            'Это конец',
            'end_empty'
        );
});