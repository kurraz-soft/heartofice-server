<?php
/**
 * @var \app\models\GamePage $this
 */
?>

<p>
    Фигура появляется из темноты, словно приведение. Она укутана в грубую накидку из меха, из сморщенного тела с тонкой шеей вырастает большая голова, похожая на кожаную сумку. Сняв капюшон, оно
демонстрирует отвратительное лицо с торчащим на
гибком стебле единственным мутным глазом.
</p>
<p>
    Боше взбирается на выступ и замирает там, загипнотизированный взглядом существа. Стебель двигается, и смертельный взгляд обращается в вашу сторону.
</p>

<?php
if(in_array('Ловкость',$this->character->skills))
    $this->addAnswer('Продолжить...', '112');
else
    $this->addAnswer('Предпринимать что-либо уже поздно...', 'end_2');
?>
