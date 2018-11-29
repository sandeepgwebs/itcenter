<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\onlinecourse;

/**
 * onlinecourseSearch represents the model behind the search form of `common\models\onlinecourse`.
 */
class onlinecourseSearch extends onlinecourse
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'coursecatgories_id', 'sub_course_id', 'skilllavel_id'], 'integer'],
            [['name', 'description', 'teacher', 'Price', 'image'], 'safe'],
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
        $query = onlinecourse::find();

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
            'coursecatgories_id' => $this->coursecatgories_id,
            'sub_course_id' => $this->sub_course_id,
            'skilllavel_id' => $this->skilllavel_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'teacher', $this->teacher])
            ->andFilterWhere(['like', 'Price', $this->Price])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}

