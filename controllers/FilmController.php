<?php

    namespace app\controllers;

    use app\models\Director;
    use yii\web\Controller;
    use yii\data\Pagination;
    use app\models\Film;



    class FilmController extends Controller
    {
        public function actionIndex()
        {
            $query = Film::find() -> innerJoinWith('genre') -> innerJoinWith('director');
            $pagination = new Pagination([
                'defaultPageSize' => 100,
                'totalCount' => $query -> count(),
            ]);
            $films = $query
                -> orderBy('Director_Name')                
                -> offset($pagination -> offset)
                -> limit($pagination -> limit)
                -> all();
            return $this -> render('index', [
                'films' => $films,
                'pagination' => $pagination,
            ]);
        }

        public function actionTwenty()
        {
            $query = Film::Find() -> innerJoinWith('genre') -> innerJoinWith('director');
            $films = $query
                -> orderBy('Year')
                -> where('Year >= 2000')
                -> all();
            return $this -> render('twenty', [
                'films' => $films]);
        }

        public function actionQuantity()
        {
            $query = Film::find();
            $films = $query
                -> select('COUNT(id) as count, Director_id')
                -> groupBy('Director_id')
                -> all();
            return $this -> render('quantity', [
                'films' => $films]);
        }
    }
