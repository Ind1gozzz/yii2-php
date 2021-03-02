<?php

    namespace app\controllers;

    use yii\web\Controller;
    use yii\data\Pagination;
    use app\models\Genre;



    class GenreController extends Controller
    {
        public function actionIndex()
        {
            $query = Genre::find();
            $pagination = new Pagination([
                'defaultPageSize' => 100,
                'totalCount' => $query -> count(),
            ]);
            $genres = $query -> orderBy('Genre_name')
                -> offset($pagination -> offset)
                -> limit($pagination -> limit)
                -> all();
            return $this -> render('index', [
                'genres' => $genres,
                'pagination' => $pagination,
            ]);
        }
    }
