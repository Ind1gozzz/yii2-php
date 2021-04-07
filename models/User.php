<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;



class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $authKey;
    public $accessToken;

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function getId()
    {
        return $this -> getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this -> auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this -> auth_key === $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app -> security -> validatePassword($password, $this -> password);
    }

    public static function tableName()
    {
        return 'user';
    }

    public function generateAuthKey()
    {
        $this -> auth_key = Yii::$app -> security -> generateRandomString();
    }
}
