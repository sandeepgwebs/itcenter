<div class="row">
    <?php foreach($model as $show){?>
    <div class="col-sm-6">
        <div class="traning">
            <img src="<?=\yii\helpers\Url::base().'/uploads/onlinecourse/'.$show->images?>">
            <div class="software">
                <a href="#"><?= $show->name?></a>
                <h4><?= $show->teacher?></h4>
                <p><?= $show->description?></p>
                <div class="rating">
                    <ul>
                        <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>20 Student</li>
                        <li><i class="fa fa-star" aria-hidden="true"></i>5 Ratings</li>
                        <span class="doller">$<?=$show->rate?></span>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
