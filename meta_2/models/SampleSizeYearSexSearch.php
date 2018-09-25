<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SampleSizeYearSex;

/**
 * SampleSizeYearSexSearch represents the model behind the search form of `app\models\SampleSizeYearSex`.
 */
class SampleSizeYearSexSearch extends SampleSizeYearSex
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['study_id', 'sex', 'year'], 'safe'],
            [['treatment_group_sample_size'], 'number'],
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
        $query = SampleSizeYearSex::find();

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
            'treatment_group_sample_size' => $this->treatment_group_sample_size,
            'year' => $this->year,
        ]);

        $query->andFilterWhere(['like', 'study_id', $this->study_id])
            ->andFilterWhere(['like', 'sex', $this->sex]);

        return $dataProvider;
    }
}
