<div class="Categories">
    <h1>Latest Courses</h1>
    <?php
    //only show three value display
    $i=1;
    foreach($model as $side){
        if($i === 4){
            break;
        }
        else {
            ?>
            <div class="cover-post">
                <div class="latest-image">
                    <img src="<?= \yii\helpers\Url::base() . '/uploads/onlinecourse/' . $side->image ?>">
                </div>
                <div class="latest-title">
                    <a href="#"><?= $side->name ?></a><br>
                    <span class="rate">$250</span>
                </div>
            </div>
            <?php
        }
        $i++;
        } ?>
</div>
