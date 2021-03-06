<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use yii\data\Pagination;
    use app\models\Director;
    use yii\db\Expression;
    use yii\db\ActiveRecord;



    class DirectorController extends Controller
    {
        public function actionIndex()
        {
            $query = Director::find();
            $pagination = new Pagination([
                'defaultPageSize' => 100,
                'totalCount' => $query->count(),
            ]);
            $directors = $query
                -> orderBy('Director_Name')
                -> offset($pagination -> offset)
                -> limit($pagination -> limit)
                -> all();
            return $this ->render('index', [
                'directors' => $directors,
                'pagination' => $pagination,
            ]);
        }
        
        public function actionQuantity()
        {
            $query = Director::find();
            $pagination = new Pagination([
                'defaultPageSize' => 100,
                'totalCount' => $query->count(),
            ]);
            $directors = $query
                -> select([new Expression("COUNT(film.id)"), 'Director_Name'])
                -> innerJoinWith('film')
                -> from('directors')
                -> groupBy('Director_Name')
                -> all();
            return $this ->render('quantity', [
                'directors' => $directors,
                'pagination' => $pagination,
            ]);
        }

        public function actionAdditionDir()
        {
            $director = new Director();
            if ($director -> load(Yii::$app -> request -> post()) && $director -> validate())
            {
                Yii::$app -> db -> createCommand() -> insert('director', [
                    'Director_Name' => 'dname',
                    'Birth_date' => 'birth',
                    'Country' => 'Country',
                    'Number_of_films' => 'numberf'
                ]) -> execute();
                $director -> dname;
                $director -> birth;
                $director -> country;
                $director -> numberf;
                $director -> save();

                return $this -> render('addition-dir-con', ['director' => $director]);

            } else
            {
                return $this -> render('addition-dir', ['director' => $director]);
            }
        }
    }
