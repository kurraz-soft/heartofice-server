<?php
/**
 * @var \app\models\GamePage $this
 */
?>

<p>
    Библиотека — это длинная анфилада комнат
в подвале здания. Воздух здесь сухой и пахнет плесенью, между столами из искуственного ореха падает зеленый свет от ламп. В дополнение к тысячам книг тут
стоят два или три древних компьютерных терминала.
</p>

<?php
if(!$this->character->hasKeyword(\app\library\KeywordsLibrary::NEMESIS)
        && !$this->character->hasKeyword(\app\library\KeywordsLibrary::HUMBABA)
    )
    {
        $this->addAnswer('Попытаться связаться с Глоси', $this->character->hasSkill(\app\library\SkillsLibrary::CYBERNETIC) ? 116 : 138);
    }
$this->addAnswer('Почитать о Сердце Волента', $this->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE?160:182));
$this->addAnswer('Покинуть библиотеку', 73);
?>
