<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;

 //echo "<pre>";print_r($model);die;
//$model['name'];
?>

 <div class="container">
    <div class="row">
         <div class="col-sm-6">
            <div class="traning">
                <img src="<?=\yii\helpers\Url::base().'/uploads/onlinecourse/'.$model->image?>">
                <div class="software">
                    <a href="#"><?= $model->name?></a>
                    <h4><?= $model->teacher?></h4>
                    <p><?= $model->description?></p>
                    <div class="rating">
                        <ul>
                            <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>20 Student</li>
                            <li><i class="fa fa-star" aria-hidden="true"></i>5 Ratings</li>
                            <span class="doller">$250</span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
