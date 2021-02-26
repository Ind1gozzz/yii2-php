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
        <h2>Your sent comment: </h2>

        <table class="table table-striped table-bordered">
                <tr>
                    <td class="col-lg-7"><h4>Name</h4></td>
                    <td><h4><?= Html::encode($model -> name)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Email</h4></td>
                    <td><h4><?= Html::encode($model -> email)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Your age</h4></td>
                    <td><h4><?= Html::encode($model -> age)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Date fo visit</h4></td>
                    <td><h4><?= Html::encode($model -> date)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Favorite cuisine</h4></td>
                    <td><h4><?= Html::encode($model -> favoritCuisine)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Recommend to friends ?</h4></td>
                    <td><h4><?= Html::encode($model -> recomendate)   ?></h4></td>
                </tr>
                <tr>
                    <td class="col-lg-7"><h4>Your comment</h4></td>
                    <td><h4><?= Html::encode($model -> comment)   ?></h4></td>
                </tr>  
        </table>

    </div>