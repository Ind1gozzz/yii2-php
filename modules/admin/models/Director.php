<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "director".
 *
 * @property int $id
 * @property string|null $Director_Name
 * @property string|null $Birth_date
 * @property string|null $Country
 * @property int|null $Number_of_films
 *
 * @property Film[] $films
 */
class Director extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'director';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Director_Name', 'Country'], 'string'],
            [['Birth_date'], 'safe'],
            [['Number_of_films'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * Gets query for [[Films]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['Director_id' => 'id']);
    }
}
