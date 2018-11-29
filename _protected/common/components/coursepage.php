<?php
namespace common\components;
use yii\data\Pagination;
use common\models\onlinecourse;
use yii\base\Widget;

class Coursepage extends Widget
{
    public function run()
    {
        $model = Onlinecourse::find();
        $count = $model->count();
        $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 4]);
        $models = $model->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('showall',['model'=>$models,'pagination'=>$pagination]);
    }
}
?>