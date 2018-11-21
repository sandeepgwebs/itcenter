<?php
namespace common\components;

use common\models\events;
use yii\base\widget;

class Eventseven extends Widget{
    public function run(){
        $model= Events::find()->all();
        return $this->render('eventsview',['model'=>$model]);
    }
}