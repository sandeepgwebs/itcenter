<?php
namespace frontend\models;

use common\models\customformsearch;
use common\models\sliderimages;
use yii\base\Widget;

class Newsearch extends Widget{
    public $type;
    public $course;

    public function run(){
        $model = new Customformsearch;
        return $this->render('index',['model' => $model,'type' => $this->type,'course' => sliderimages::find()->all()]);
    }
}