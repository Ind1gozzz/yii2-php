<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form -> field($model, 'name') -> label('Your name') ?>
    <?= $form -> field($model, 'email') -> label('Your email') ?> 
    <div class="form-group">
        <?= Html::submitButton('Sendd', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
