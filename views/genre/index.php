<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;

    $this -> title = 'Lab. 2';

?>

    <h1>Genres</h1>
    <div class="col-lg-6">
        <table class="table table-striped table-bordered table-hover table-dark">
        <div class="table-responsive">
            <tbody>
                <?php foreach ($genres as $genre): ?>
                    <tr>
                        <th scope="row"><?= Html::encode("{$genre -> Genre_name}") ?> </th>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>