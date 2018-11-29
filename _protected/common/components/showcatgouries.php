<?php
namespace common\components;

use common\models\onlinecourse;
use yii\base\Widget;

class Showcatgouries extends Widget
{
    public function run()
    {
        $model = Onlinecourse::find()->all();
        return $this->render('categories', ['model'=>$model]);
    }
}
?>