<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FundingSourcesOfMaterial;

/**
 * FundingSourcesOfMaterialSearch represents the model behind the search form about `app\models\FundingSourcesOfMaterial`.
 */
class FundingSourcesOfMaterialSearch extends FundingSourcesOfMaterial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id'], 'integer'],
            [['funding_source', 'address', 'country', 'funded_year', 'comments'], 'safe'],
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
        $query = FundingSourcesOfMaterial::find();

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
            'material_id' => $this->material_id,
            'funded_year' => $this->funded_year,
        ]);

        $query->andFilterWhere(['like', 'funding_source', $this->funding_source])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
