<?php

    namespace app\models;

    use Yii;
    use yii\base\Model;


    class SignUpForm extends Model
    {
        public $userName;
        public $password1;
        public $password2;

        public $_user = false;

        public function rules()
        {
            return [
                [['userName'], 'required'],
                [['userName'], 'string', 'length' => [5, 25]],
                [['password1', 'password2'], 'required', 'message' => 'Password cannot be blank'],
                ['password2', 'compare', 'compareAttribute' => 'password1', 'message' => 'Passwords don`t match']
            ];
        }

        public function getUser()
        {
            if ($this->_user === false) {
                $this->_user = User::findByUsername($this -> username);
            }
    
            return $this->_user;
        }

        public function SignUp()
        {
            if ($this -> validate())
            {
                $newuser = new User();
                $query = Yii::$app -> db -> createCommand() -> insert('user', [
                    'username' => $this -> userName,
                    'password' => Yii::$app -> getSecurity() -> generatePasswordHash($this -> password1)
                ]) -> execute();

                // $newuser -> username = $this -> userName;
                // $newuser -> password = Yii::$app -> getSecurity() -> generatePasswordHash($this -> password1);
                // $newuser -> save();
            }
            return true;
        }

        public function QWE()
        {
            return true;
        }
    }