<?php
    use yii\widgets\ListView;
    use yii\data\ActiveDataProvider;
    use yii\helpers\Html;

?>
<?php/*//echo "<pre>";print_r($Newsprovider);die;
    echo ListView::widget([
        'dataProvider' =>  $Newsprovider,
        'itemView' => 'newsearch',
        'columns' => [
            'name',
        ],
    ]);*/?>
 <div class="online-course">
    <div class="container">
        <div class="row">
            <?php
            $dataProvider = $Newsprovider;
             $FilterModel = $Searchmodel;
             //echo "<pre>";print_r($Newsprovider);die;
            foreach ($dataProvider  as $key) { ?>
                <div class="col-sm-4">
                    <div class="traning">
                        <img src="<?=\yii\helpers\Url::base().'/uploads/onlinecourse/'.$key['image']?>">
                        <div class="software">
                            <a href="#"><?=$key['name']?></a>
                            <h4><?=$key['teacher']?></h4>

                            <p><?=$key['description']?></p>

                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>20 Student</li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i>5 Ratings</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
