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

    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link-active" href="?r=admin%2Fdirector"><h4>Table "Directors"</h4></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?r=admin%2Ffilm"><h4>Table "Films"</h4></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?r=admin%2Fgenre"><h4>Table "Genres"</h4></a>
  </li>
</ul>

    <p>
    <a href="?r=admin%2Fdefault%2Findex" class="btn btn-info btn-md" role="button" aria-pressed="true">Main page</a>
    </p>

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
