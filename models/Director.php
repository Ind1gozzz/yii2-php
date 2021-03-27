<?php

    namespace app\models;

    use yii\db\ActiveRecord;
        

    
    class Director extends ActiveRecord
    {
        //public $count;

        public $deleteId;
        public $dname;
        public $birth;
        public $country;
        public $numberf;
        public $findworddd;

        public function getFilm()
        {
            return $this -> hasMany(Film::className(), ['Director_id' => 'id']);
        }

        function rules()
        {
            return [
                ['findworddd', 'required']
            ];
        }
    }
