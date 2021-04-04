<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Film_Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'Rate')->textInput() ?>

    <?= $form->field($model, 'Director_id')->textInput() ?>

    <?= $form->field($model, 'Genre_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
