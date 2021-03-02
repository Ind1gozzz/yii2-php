<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;

    $this -> title = 'Lab. 2';

?>

    <h1>Countries</h1>

    <ul>
    <?php foreach ($directors as $director): ?>
        <li>
            <?= Html::encode("{$director->id} ({$director->Director_Name})") ?>:
            <?= $director->Country ?>
        </li>
    <?php endforeach; ?>
    </ul>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
