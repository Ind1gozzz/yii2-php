<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\DirectorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Directors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="director-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Director', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Director_Name:ntext',
            'Birth_date',
            'Country:ntext',
            'Number_of_films',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
