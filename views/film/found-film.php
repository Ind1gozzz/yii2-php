<?php

    use yii\helpers\Html;

    $this -> title = 'Lab. 2';

?>

    <h1>Films</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Film name</th>
            </tr>        
        </thead>
        <tbody>
            <?php foreach ($films as $film): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$film -> Film_Name}") ?> </th>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>