<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lim;

/**
 * LimSearch represents the model behind the search form of `app\models\Lim`.
 */
class LimSearch extends Lim
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'contract_id', 'lim'], 'integer'],
            [['tmp_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Lim::find();

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
            'contract_id' => $this->contract_id,
            'tmp_date' => $this->tmp_date,
            'lim' => $this->lim,
        ]);

        return $dataProvider;
    }
}
