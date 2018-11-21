<div class="home-slider owl-carousel owl-theme">
    <?php foreach($model as $slideimage){?>
    <div class="item">
        <img src="<?=\yii\helpers\Url::base().'/uploads/homeslider/'.$slideimage->images?>">
        <div class="content">
            <h2><?=$slideimage->title?></h2>
            <p><?=$slideimage->description?></p>
        </div>
    </div>
    <?php }?>
</div>