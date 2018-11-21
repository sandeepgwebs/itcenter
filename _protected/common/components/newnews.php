<?php
namespace common\components;

use common\models\latestnews;
use yii\base\widget;

class Newnews extends widget
{
    public function run(){
        $model = Latestnews::find()->all();
        return $this->render('newsview',['model'=>$model]);
    }
}
?>