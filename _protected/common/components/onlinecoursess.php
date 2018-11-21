<?php
namespace common\components;

use common\models\onlinecourse;
use yii\base\widget;

class Onlinecoursess extends Widget
{
    public function run(){
        $model = onlinecourse::find()->all();
        return $this->render('onlinecourses',['model'=>$model]);
    }
}
?>