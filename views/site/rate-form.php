<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    
    $this -> title = 'Lab. 1';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Lab. 1</h1>

    </div>

</div>

<?php $form = ActiveForm::begin(); ?>
    <?= $form -> field($model, 'name') -> label('Your name') ?>
    <?= $form -> field($model, 'email') -> label('Your email') ?>
    <?= $form -> field($model, 'age') -> label('Your age') ?>
    <?= $form -> field($model, 'date') -> label('Date of visit') ?>
    <?= $form -> field($model, 'favoritCuisine[]') -> label('Your favorite cuisine') -> dropDownList(
        ['1' => 'Italian', '2' => 'French', '3' => 'Russian', '4' => 'Spainish'], ['prompt' => 'Select...'])?> 
    <?= $form -> field($model, 'recomendate') -> label('Recommend to your friends ?') -> radioList(['1' => 'Yes', '2' => 'No']) ?> 
    <?= $form -> field($model, 'text') -> label('Your comment') ?> 
    <div class="form-group">
        <?= Html::submitButton('Sendd', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

