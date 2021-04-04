<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string|null $Film_Name
 * @property int|null $Year
 * @property int|null $Rate
 * @property int|null $Director_id
 * @property int|null $Genre_id
 *
 * @property Genre $genre
 * @property Director $director
 */
class Film extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Film_Name'], 'string'],
            [['Year', 'Rate', 'Director_id', 'Genre_id'], 'integer'],
            [['Genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['Genre_id' => 'id']],
            [['Director_id'], 'exist', 'skipOnError' => true, 'targetClass' => Director::className(), 'targetAttribute' => ['Director_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Film_Name' => 'Film Name',
            'Year' => 'Year',
            'Rate' => 'Rate',
            'Director_id' => 'Director ID',
            'Genre_id' => 'Genre ID',
        ];
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'Genre_id']);
    }

    /**
     * Gets query for [[Director]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Director::className(), ['id' => 'Director_id']);
    }
}
