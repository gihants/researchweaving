<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SearchSource;

/**
 * SearchSourceSearch represents the model behind the search form about `app\models\SearchSource`.
 */
class SearchSourceSearch extends SearchSource
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['source_name', 'weblink', 'source_type', 'comments'], 'safe'],
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
        $query = SearchSource::find();

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
        ]);

        $query->andFilterWhere(['like', 'source_name', $this->source_name])
            ->andFilterWhere(['like', 'weblink', $this->weblink])
            ->andFilterWhere(['like', 'source_type', $this->source_type])
            ->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
