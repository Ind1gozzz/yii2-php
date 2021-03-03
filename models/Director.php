<?php

    namespace app\models;

    use yii\db\ActiveRecord;
        

    
    class Director extends ActiveRecord
    {
        public function getFilm()
        {
            return $this -> hasMany(Film::className(), ['Director_id' => 'id']);
        }
    }
