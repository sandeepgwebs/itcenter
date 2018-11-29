<?php
 namespace common\components;

 use yii\base\Widget;
 use common\models\skilllavel;

class Topforms extends Widget{
    public function run(){
        $model = skilllavel::find()->all();
        return $this->render('mysearch',['model' => $model]);
    }
}
?>