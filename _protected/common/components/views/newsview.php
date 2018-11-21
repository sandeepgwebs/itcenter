<div class="latest">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="single">
                    <?php foreach($model as $news){?>
                    <div class="latest-post">
                        <img src="<?=\yii\helpers\Url::base().'/uploads/latestnews/'.$news->images?>">
                        <div class="daveted">
                            <a href="#"><?= $news->title?></a>
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <?= $news->adminname?>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <?= $news->date?>
                                </li>
                            </ul>
                            <p><?= $news->discription?></p>
                            <div class="relatedmore">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                </div>
            </div>



            <div class="col-sm-5">
                <?php foreach($model as $news){?>
                <div class="latest-side">
                    <a href="#"><?= $news->title?></a>
                    <ul>
                        <li>
                            <p><?= $news->adminname?></p>
                        </li>
                        <li>
                            <p><?= $news->date?></p>
                        </li>
                    </ul>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>