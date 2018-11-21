<?php
namespace common\components;

use common\models\onlinecourse;
use yii\base\Widget;

class Latestside extends Widget
{
 public function run()
 {
     $model = Onlinecourse::find()->all();
     return $this->render('showsidepost', ['model'=>$model]);
 }
}
?>