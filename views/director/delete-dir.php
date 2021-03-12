<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    
    $this -> title = 'Lab. 2';

?>

<div class="">

    <div class="jumbotron">
        <h1>Delete director by id</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form -> field($director, 'delid') -> label("<h4>Diector id</h4>") ?>
        
    </div>
    <div class="form-group">
            <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
    </div> 
    <?php ActiveForm::end(); ?>
    <div class="col-lg-1">
    </div>
</div>