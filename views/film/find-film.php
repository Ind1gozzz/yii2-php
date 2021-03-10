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
            <?= $form -> field($film, 'findw') -> label("<h4>Film name</h4>") ?>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="form-group">
            <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
    </div> 
   
    <div class="col-lg-1">
    </div>
</div>