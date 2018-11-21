<?php
namespace common\components;

use common\models\sliderimages;
use common\models\onlinecourse;
use yii\base\widget;

class Homepageslide extends widget
{
    public function run(){
        $model = SliderImages::findall(['slider_id' => 1]);

        return $this->render('sliderpage',['model'=>$model]);
    }
}
?>