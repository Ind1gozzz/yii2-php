<?php

    use yii\helpers\Html;

    $this -> title = 'Lab. 2';

?>

    <h1>Films</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Director name</th>
                <th scope="col">Quantity</th>  
            </tr>        
        </thead>
        <tbody>
            <?php foreach ($films as $film): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$film -> director -> Director_Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$film -> count}") ?> </th>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>