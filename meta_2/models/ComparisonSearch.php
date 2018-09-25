<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comparison;

/**
 * ComparisonSearch represents the model behind the search form about `app\models\Comparison`.
 */
class ComparisonSearch extends Comparison
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Comp_ID', 'ES_ID', 'Study_ID', 'FirstAuthor', 'Year', 'Journal', 'Species_ID', 'CommonName', 'Genus', 'Species', 'animal', 'Strain', 'Sex', 'FoodSched', 'Type', 'Notes_control', 'Notes_treatment'], 'safe'],
            [['Volume', 'Model', 'Repro', 'AL'], 'integer'],
            [['CV1', 'Prots1', 'Carbs1', 'Fats1', 'Intake', 'CI1', 'Age1', 'N1', 'LT25contr', 'LT50contr', 'LT75contr', 'CR', 'CV2', 'c_nCR', 'c_CR', 'CI2', 'c_aCR', 'Prots2', 'Carbs2', 'Fats2', 'Age2', 'N2', 'Page', 'Prots', 'PD25', 'PD50', 'PD75', 'c_LT25_logHR', 'c_LT25_varlogHR', 'c_LT50_logHR', 'c_LT50_varlogHR', 'c_LT75_logHR', 'c_LT75_varlogHR', 'c_LT2550_logHR', 'c_LT2550_varlogHR', 'c_LT5075_logHR', 'c_LT5075_varlogHR', 'c_all_logHR', 'c_all_varlogHR'], 'number'],
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
        $query = Comparison::find();

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
            'Year' => $this->Year,
            'Volume' => $this->Volume,
            'Model' => $this->Model,
            'Repro' => $this->Repro,
            'AL' => $this->AL,
            'CV1' => $this->CV1,
            'Prots1' => $this->Prots1,
            'Carbs1' => $this->Carbs1,
            'Fats1' => $this->Fats1,
            'Intake' => $this->Intake,
            'CI1' => $this->CI1,
            'Age1' => $this->Age1,
            'N1' => $this->N1,
            'LT25contr' => $this->LT25contr,
            'LT50contr' => $this->LT50contr,
            'LT75contr' => $this->LT75contr,
            'CR' => $this->CR,
            'CV2' => $this->CV2,
            'c_nCR' => $this->c_nCR,
            'c_CR' => $this->c_CR,
            'CI2' => $this->CI2,
            'c_aCR' => $this->c_aCR,
            'Prots2' => $this->Prots2,
            'Carbs2' => $this->Carbs2,
            'Fats2' => $this->Fats2,
            'Age2' => $this->Age2,
            'N2' => $this->N2,
            'Page' => $this->Page,
            'Prots' => $this->Prots,
            'PD25' => $this->PD25,
            'PD50' => $this->PD50,
            'PD75' => $this->PD75,
            'c_LT25_logHR' => $this->c_LT25_logHR,
            'c_LT25_varlogHR' => $this->c_LT25_varlogHR,
            'c_LT50_logHR' => $this->c_LT50_logHR,
            'c_LT50_varlogHR' => $this->c_LT50_varlogHR,
            'c_LT75_logHR' => $this->c_LT75_logHR,
            'c_LT75_varlogHR' => $this->c_LT75_varlogHR,
            'c_LT2550_logHR' => $this->c_LT2550_logHR,
            'c_LT2550_varlogHR' => $this->c_LT2550_varlogHR,
            'c_LT5075_logHR' => $this->c_LT5075_logHR,
            'c_LT5075_varlogHR' => $this->c_LT5075_varlogHR,
            'c_all_logHR' => $this->c_all_logHR,
            'c_all_varlogHR' => $this->c_all_varlogHR,
        ]);

        $query->andFilterWhere(['like', 'Comp_ID', $this->Comp_ID])
            ->andFilterWhere(['like', 'ES_ID', $this->ES_ID])
            ->andFilterWhere(['like', 'Study_ID', $this->Study_ID])
            ->andFilterWhere(['like', 'FirstAuthor', $this->FirstAuthor])
            ->andFilterWhere(['like', 'Journal', $this->Journal])
            ->andFilterWhere(['like', 'Species_ID', $this->Species_ID])
            ->andFilterWhere(['like', 'CommonName', $this->CommonName])
            ->andFilterWhere(['like', 'Genus', $this->Genus])
            ->andFilterWhere(['like', 'Species', $this->Species])
            ->andFilterWhere(['like', 'animal', $this->animal])
            ->andFilterWhere(['like', 'Strain', $this->Strain])
            ->andFilterWhere(['like', 'Sex', $this->Sex])
            ->andFilterWhere(['like', 'FoodSched', $this->FoodSched])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'Notes_control', $this->Notes_control])
            ->andFilterWhere(['like', 'Notes_treatment', $this->Notes_treatment]);

        return $dataProvider;
    }
}
