<div class="Categories">
    <h1>Latest Courses</h1>
    <?php foreach($model as $side){?>
    <div class="cover-post">
        <div class="latest-image">
            <img src="<?=\yii\helpers\Url::base().'/uploads/onlinecourse/'.$side->images?>">
        </div>
        <div class="latest-title">
            <a href="#"><?= $side->name ?></a><br>
            <span class="rate">$<?= $side->rate?></span>
        </div>
    </div>
    <?php } ?>
</div>
