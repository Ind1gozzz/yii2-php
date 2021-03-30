<?php

    use yii\helpers\Html;

$this->title = 'My Yii Application';

?>

<div class="">

    <div class="jumbotron">
        <h1>~I|i`</h1>
        <h2>Well done by David Atoyan, Vis32</h2>
<?php $hash = Yii::$app -> getSecurity() -> generatePasswordHash('12345');
echo $hash; ?>
    </div>

</div>
