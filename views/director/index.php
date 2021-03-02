<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;

    $this -> title = 'Lab. 2';

?>

    <h1>Directors</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Director name</th>
                <th scope="col">Birth date</th>
                <th scope="col">Country</th>
                <th scope="col">Number of films</th>            
            </tr>        
        </thead>
        <tbody>
            <?php foreach ($directors as $director): ?>
                <tr>
                    <th scope="row"><?= Html::encode("{$director -> Director_Name}") ?> </th>
                    <th scope="row"><?= Html::encode("{$director -> Birth_date}") ?> </th>
                    <th scope="row"><?= Html::encode("{$director -> Country}") ?> </th>
                    <th scope="row"><?= Html::encode("{$director -> Number_of_films}") ?> </th>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>