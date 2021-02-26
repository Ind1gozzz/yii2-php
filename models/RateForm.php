<?php
    namespace app\models;

    use yii\base\Model;

    class RateForm extends Model
    {
        public $name;
        public $email;
        public $date;
        public $age;
        public $favoritCuisine = array();
        public $recomendate;
        public $text;
    
        public function rules()
        {
            return [
                [['name', 'email', 'date', 'age', 'favoritCuisine', 'recomendate', 'text'], 'required'],
                ['email', 'email'],
                ['age', 'number'],
                
            ];
        }
    }
    
?>