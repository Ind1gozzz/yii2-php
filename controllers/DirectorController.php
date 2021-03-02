<?php

    namespace app\controllers;

    use yii\web\Controller;
    use yii\data\Pagination;
    use app\models\Director;

class DirectorController extends Controller
{
    public function actionIndex()
    {
        $query = Director::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $directors = $query->orderBy('Director_Name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'directors' => $directors,
            'pagination' => $pagination,
        ]);
    }
}
