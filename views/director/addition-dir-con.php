<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    
    $this -> title = 'Lab. 1';

?>

<div class="">

    <div class="jumbotron">
        <h1>Lab. 1</h1>
    </div>

</div>



<div class="col-lg-5">
        <h2>You've just added new Director: </h2>

        <table class="table table-striped table-bordered">
                <tr>
                    <td class="col-lg-7"><h4>Director name</h4></td>
                    <td><h4><?= Html::encode($director -> dname)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Birth</h4></td>
                    <td><h4><?= Html::encode($director -> birth)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Country</h4></td>
                    <td><h4><?= Html::encode($director -> country)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Number of films</h4></td>
                    <td><h4><?= Html::encode($director -> numberf)   ?></h4></td>
                </tr>  
        </table>

    </div>