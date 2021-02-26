<?php
    namespace app\models;

    use yii\base\Model;
    use yii\base\validators;

    class RateForm extends Model
    {
        public $name;
        public $email;
        public $date;
        public $age;
        public $favoritCuisine;
        public $recomendate;
        public $comment;
    
        public function rules()
        {
            return [
                [['name', 'email', 'date', 'age', 'favoritCuisine', 'recomendate', 'comment'], 'required'],
                ['email', 'email'],
                ['age', 'number', 'max' => 100, 'min' => 18],
                ['name', 'string', 'length' => [5, 25]],
                ['comment', 'trim'],
                ['date', 'date', 'format' => 'dd-MMM'],
            ];
        }
    }
    
?>