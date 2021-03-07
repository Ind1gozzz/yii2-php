<?php

    namespace app\models;

    use yii\db\ActiveRecord;
        

    
    class Director extends ActiveRecord
    {
        public $count;

        public $dname;
        public $birth;
        public $country;
        public $numberf;

        public function getFilm()
        {
            return $this -> hasMany(Film::className(), ['Director_id' => 'id']);
        }

        function rules()
        {
            return [
                [['dname', 'birth', 'country', 'numberf'], 'required'],
                ['birth', 'date', 'format' => 'yyyy-mm-dd'],
                ['dname', 'string', 'length' => [5, 30]],
                ['numberf', 'number'],
                ['dname', 'trim']
            ];
        }
    }
