<?php

    namespace app\models;

    use yii\db\ActiveRecord;
        


    class Film extends ActiveRecord
    {
        public $count;
        public $findword;

        public function getGenre()
        {
            return $this -> hasOne(Genre::className(), ['id' => 'Genre_id']);
        }

        public function getDirector()
        {
            return $this -> hasOne(Director::className(), ['id' => 'Director_id']);
        }

        public function rules()
        {
            return [
                ['findword', 'required'],
                ['findword', 'string', 'length' => [3, 30]]
            ];
        }
    }

