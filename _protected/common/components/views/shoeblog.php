<div class="blog-events">
    <div class="events">
        <div class="container">
            <div class="learning"></div>
            <div class="row">
                <?php foreach($model as $shoe){?>
                <div class="col-sm-4">
                    <div class="Handles">
                        <div class="all-events">
                            <img src="<?=\yii\helpers\Url::base().'/uploads/eventsimg/'.$shoe->images?>">
                            <div class="davet">
                                <a href="#"><?=$shoe->title?></a>
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i><?=$shoe->date?></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>25 New York City</li>
                                </ul>
                                <p><?=$shoe->description?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="view-all">
            <a href="#">load more</a>
        </div>
    </div>
</div>