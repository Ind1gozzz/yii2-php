<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    
    $this -> title = 'Lab. 2';

?>

<div class="">

    <div class="jumbotron">
        <h1>Add new director</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form -> field($director, 'dname') -> label("<h4>Director name</h4>") ?>
            <?= $form -> field($director, 'birth') -> label("<h4>Diector birth</h4>") ?>
            <?= $form -> field($director, 'country') -> label("<h4>Country</h4>") ?>
            <?= $form -> field($director, 'numberf') -> label("<h4>Number of films</h4>") ?>
            <div class="form-group">
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
    </div>
   
    <div class="col-lg-1">
    </div>
</div>