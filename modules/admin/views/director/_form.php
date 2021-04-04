<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Director */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="director-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Director_Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Birth_date')->textInput() ?>

    <?= $form->field($model, 'Country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Number_of_films')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
