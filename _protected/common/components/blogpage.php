<?php

namespace common\components;

use common\models\events;
use yii\base\Widget;

class Blogpage extends Widget{
  public function run()
  {
      $model = Events::find()->all();
      return $this->render('shoeblog',['model'=>$model]);
  }
}
?>