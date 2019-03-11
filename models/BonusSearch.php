<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bonus;

/**
 * BonusSearch represents the model behind the search form of `app\models\Bonus`.
 */
class BonusSearch extends Bonus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bonus', 'month', 'year'], 'integer'],
            [['emp_code'], 'safe'],
            [['salary', 'bonus', 'total'], 'number'],
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
        $query = Bonus::find();

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
            'id_bonus' => $this->id_bonus,
            'month' => $this->month,
            'year' => $this->year,
            'salary' => $this->salary,
            'bonus' => $this->bonus,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'emp_code', $this->emp_code]);

        return $dataProvider;
    }
}
