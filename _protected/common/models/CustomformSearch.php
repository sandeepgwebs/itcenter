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
    {
       /* $query = $model::find();
        $query->andFilterWhere(['like',$colmn, $params]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);*/
        $dataProvider  = $model::find()->where(['coursecatgories_id'=>$params['Sub_course']['coursecatgories_id'],'sub_course_id'=>$params['Sub_course']['sub_course_id']])->all();
        $dataProvider->andFilterWhere([
            'or',
            ['like', 'name', $params['Sub_course']['name']],
        ]);
        return $dataProvider;
    }
}
?>