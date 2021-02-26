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

<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form -> field($model, 'name') -> label("<h4>Your name</h4>") ?>
            <?= $form -> field($model, 'email') -> label("<h4>Your email</h4>") ?>
            <?= $form -> field($model, 'age') -> label("<h4>You age</h4>") ?>
            <?= $form -> field($model, 'date') -> label("<h4>Date of visit</h4>") ?>
            <?= $form -> field($model, 'favoritCuisine') -> label("<h4>Your favorite cuisine</h4>") -> dropDownList(
                ['1' => 'Italian', '2' => 'French', '3' => 'Russian', '4' => 'Spainish'], ['prompt' => 'Select...'])?> 
            <?= $form -> field($model, 'recomendate') -> label("<h4>Recommend to your friends ?</h4>") -> radioList(['Yes' => 'Yes', 'No' => 'No']) ?> 
            <?= $form -> field($model, 'comment') -> label("<h4>Your comment</h4>") -> textarea(['rows' => 4])?>
            <div class="form-group">
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 

        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-lg-1">
    </div>

    
</div>