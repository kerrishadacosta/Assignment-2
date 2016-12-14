<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\registration;

/**
 * registrationSearch represents the model behind the search form about `app\models\registration`.
 */
class registrationSearch extends registration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Career_Level', 'Communication_Level', 'JobRelated_Level', 'Organization_Level', 'Phone_Number'], 'integer'],
            [['First_Name', 'Last_Name', 'DOB', 'Gender', 'Email', 'Address', 'Industry', 'Location', 'About_me', 'Professional_Title', 'Website'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = registration::find();

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
            'ID' => $this->ID,
            'DOB' => $this->DOB,
            'Career_Level' => $this->Career_Level,
            'Communication_Level' => $this->Communication_Level,
            'JobRelated_Level' => $this->JobRelated_Level,
            'Organization_Level' => $this->Organization_Level,
            'Phone_Number' => $this->Phone_Number,
        ]);

        $query->andFilterWhere(['like', 'First_Name', $this->First_Name])
            ->andFilterWhere(['like', 'Last_Name', $this->Last_Name])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Industry', $this->Industry])
            ->andFilterWhere(['like', 'Location', $this->Location])
            ->andFilterWhere(['like', 'About_me', $this->About_me])
            ->andFilterWhere(['like', 'Professional_Title', $this->Professional_Title])
            ->andFilterWhere(['like', 'Website', $this->Website]);

        return $dataProvider;
    }
}
