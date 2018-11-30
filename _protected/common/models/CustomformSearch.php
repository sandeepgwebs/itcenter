<?php
namespace common\models;

use yii\base\model;
use yii\data\ActiveDataProvider;

class CustomformSearch extends Model
{
    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params,$model,$colmn)
    {// working search model
        $query = $model::find();
        $query->andFilterWhere(['like',$colmn, $params]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);

//working
       /* $dataProvider  = $model::find()->where(['coursecatgories_id'=>$params['Sub_course']['coursecatgories_id'],'sub_course_id'=>$params['Sub_course']['id']])->andFilterWhere([
            'or',
            ['like', 'name', $params['Sub_course']['name']],
        ])->all();*/

        return $dataProvider;
    }
}
?>