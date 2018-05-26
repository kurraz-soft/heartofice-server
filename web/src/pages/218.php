<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Поднявшись на аэрокаре в небо над Кахирой, вы
смотрите вниз и видите фиджийца, который грозит
вам кулаком. Отсюда он выглядит крошечным. Вы пугаете его, пролетев так низко, что он вынужден распластаться на крыше, спасаясь от удара. Смеясь, вы
растворяетесь в ночи.
</p>
<p>
    Если у вас уже есть аэрокар, вам придется бросить его, поскольку вы
не можете управлять двумя машинами одновременно.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    if(!$gamePage->character->hasItem(\app\library\ItemsLibrary::AEROCAR_SCAT))
        $gamePage->character->addToInventory(\app\library\ItemsLibrary::AEROCAR_SCAT);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 311);

});