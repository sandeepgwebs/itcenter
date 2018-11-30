<?php
    use yii\widgets\LinkPager;
?>
<div class="row">
    <?php foreach($model as $show):?>
    <div class="col-sm-6">
        <div class="traning">
            <img src="<?=\yii\helpers\Url::base().'/uploads/onlinecourse/'.$show->image?>">
            <div class="software">
                <a href="#"><?= $show->name?></a>
                <h4><?= $show->teacher?></h4>
                <p><?= $show->description?></p>
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
    <?php  ?>
    <?php endforeach; ?>
    <?php
    echo LinkPager::widget([
        'pagination' => $pagination,
    ]);
    ?>
</div>
