<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Director;



class DirectorSearch extends Director
{
    public function rules()
    {
        return [
            [['id', 'Number_of_films'], 'integer'],
            [['Director_Name', 'Birth_date', 'Country'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Director::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Birth_date' => $this->Birth_date,
            'Number_of_films' => $this->Number_of_films,
        ]);

        $query->andFilterWhere(['like', 'Director_Name', $this->Director_Name])
            ->andFilterWhere(['like', 'Country', $this->Country]);

        return $dataProvider;
    }
}
