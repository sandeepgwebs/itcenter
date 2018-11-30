<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;

?>

<?php
  //echo "<pre>";print_r($DataProvider);die;
echo ListView::widget([
    'dataProvider' => $Newsprovider,
    'itemView' => 'newsearch',
]);
?>