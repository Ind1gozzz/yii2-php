<?php

    use yii\helpers\Html;

    $this -> title = 'Lab. 2';

?>

    <h1>Found directors</h1>
    
        <tbody>
            <?php if ($directors != null)
            {
                ?>
                <table class="table table-striped table-bordered table-hover table-dark">
                <div class="table-responsive">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Director name</th>
                            <th scope="col">Director birth date</th> 
                        </tr>        
                    </thead>
                <?php
            foreach ($directors as $director): ?>
                <tr>
                    <th scope="row"><?= Html::encode($director -> Director_Name) ?> </th>
                    <th scope="row"><?= Html::encode($director -> Birth_date) ?> </th>
                </tr>
                <?php endforeach;  } else { ?>
                    <h2>The directors has not found</h2>
                    <?php } ?>
        </tbody>
    </table>