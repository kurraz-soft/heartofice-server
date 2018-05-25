<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Широкие проспекты погребены под глубокими
сугробами, поскольку ворота Дью-Эна открыты всем
стихиям. Здания представляют собой монолиты темного камня, давным-давно покинутые остатками цивилизации. Их огромные масштабы и резкие геометрические формы выходят за пределы человеческого
духа. Вы находите их царственными и подавляющими.
</p>
<p>
    «Впечатляющая архитектура, а?»,— говорит
Боше, глядя на высокую черную башню, резной купол
которой похож на костлявый череп на фоне унылого
бледного неба.
</p>
<p>
    Вы видите тонкий завиток дыма, поднимающийся
от костра на главной площади города. «Кажется, не
только мы заметили сообщение Глоси,— мрачно говорите вы.— Пойдем, познакомимся».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 243);

});