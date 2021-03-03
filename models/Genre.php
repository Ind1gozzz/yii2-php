<?php

    namespace app\models;

    use yii\db\ActiveRecord;
        


    class Genre extends ActiveRecord
    {
        public function getFilm()
        {
            return $this -> hasOMany(Film::className(), ['Genre_id' => 'id']);
        }
    }
