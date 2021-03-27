<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use yii\data\Pagination;
    use app\models\Director;
    use yii\db\Expression;

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
                $query = Yii::$app -> db -> createCommand() -> insert('director', [
                    'Director_Name' => $director -> dname,
                    'Birth_date' => $director -> birth,
                    'Country' => $director -> country,
                    'Number_of_films' => $director -> numberf
                ]) -> execute();

                // $query = new Director();
                // $query -> dname = $director -> dname;
                // $query -> birth = $director -> birth;
                // $query -> country = $director -> country;
                // $query -> numberf = $director -> numberf;
                // $query -> save();
        
                return $this -> render('addition-dir-con', ['director' => $director]);

            } else
            {
                return $this -> render('addition-dir', ['director' => $director]);
            }
        }

        public function actionDeleteDir()
        {
            $director = new Director();
            $que = Director::find();

            if ($director -> load(Yii::$app -> request -> post()) && !is_null($director -> deleteId))
            {
                $query = $que
                    -> where(['id' => $director -> deleteId])
                    -> one();
                $query -> delete();

                return $this -> render('deleted-dir');
            } else
            {
                return $this -> render('delete-dir', ['director' => $director]);
            }
        }

        public function actionFindDirector()
        {
            $director = new Director();
            $quest = Director::Find();

            if ($director -> load(Yii::$app -> request -> post()) && !is_null($director -> findworddd))
            {
                $directors = $quest
                    -> where(['like', 'Birth_date', $director -> findworddd])
                    -> all();

                return $this -> render('found-director', [
                    'director' => $director,
                    'directors' => $directors
                ]);
            } else
            {
                return $this -> render('find-director', ['director' => $director]);
            }
        }
        
    }
