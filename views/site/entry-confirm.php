<?php
    use yii\helpers\Html;
?>

<p>You entered the information: </p>
<ul>
    <li><label>Name</label>:    <?= Html::encode($model -> name)   ?></li>
    <li><label>Email</label>:    <?= Html::encode($model -> email)   ?></li> 
</ul>