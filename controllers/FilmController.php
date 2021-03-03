<?php

    namespace app\controllers;

    use app\models\Director;
    use yii\web\Controller;
    use yii\data\Pagination;
    use app\models\Film;
    use app\models\Genre;



class FilmController extends Controller
    {
        public function actionIndex()
        {
            $query = Film::find() -> innerJoinWith('genre') -> innerJoinWith('director');
            $pagination = new Pagination([
                'defaultPageSize' => 100,
                'totalCount' => $query -> count(),
            ]);
            $films = $query -> orderBy('Director_Name')
                
                -> offset($pagination -> offset)
                -> limit($pagination -> limit)
                -> all();
            return $this -> render('index', [
                'films' => $films,
                'pagination' => $pagination,
            ]);
        }
    }
