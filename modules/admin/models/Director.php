<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;


class Director extends ActiveRecord
{
    public static function tableName()
    {
        return 'director';
    }

    public function rules()
    {
        return [
            [['Director_Name', 'Country'], 'string'],
            [['Birth_date'], 'safe'],
            [['Number_of_films'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Director_Name' => 'Director Name',
            'Birth_date' => 'Birth Date',
            'Country' => 'Country',
            'Number_of_films' => 'Number Of Films',
        ];
    }

    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['Director_id' => 'id']);
    }
}
