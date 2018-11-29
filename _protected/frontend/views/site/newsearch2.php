<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>

<div class="blog-events">
    <div class="events">
        <div class="container">
            <div class="learning"></div>
            <div class="row">
                <?php/* foreach($model as $shoe){*/?>
                    <div class="col-sm-4">
                        <div class="Handles">
                            <div class="all-events">
                                <img src="<?=\yii\helpers\Url::base().'/uploads/eventsimg/'.$model->images?>">
                                <div class="davet">
                                    <a href="#"><?=$model->title?></a>
                                    <ul>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i><?=$model->date?></li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>25 New York City</li>
                                    </ul>
                                    <p><?=$model->discription?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php /* } */?>
            </div>
        </div>
    </div>
</div>