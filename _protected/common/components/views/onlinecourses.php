<div class="online-course">
    <div class="container">
        <div class="row">
            <?php
            //count value
            $i = 1;
            foreach($model as $online){
                if ($i == 4){
                    break;
                } else
                {
                    ?>
                    <div class="col-sm-4">
                        <div class="traning">

                            <img src="<?=\yii\helpers\Url::base().'/uploads/onlinecourse/'.$online->image?>">
                            <div class="software">
                                <a href="#"><?= $online->name ?></a>
                                <h4><?= $online->teacher ?></h4>

                                <p><?= $online->description ?></p>

                                <div class="rating">
                                    <ul>
                                        <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>20 Student</li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i>5 Ratings</li>
                                        <span class="doller">$<?=$online->Price?></span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                $i++;
            }?>
        </div>
    </div>
</div>