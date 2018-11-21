<?php
    use common\components\coursepage;
    use common\components\latestside;
?>
<div class="pagers">
    <div class="container">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li>course</li>
        </ul>
    </div>
</div>

<div class="course-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="search-form">
                    <form>
                        <div class="form-group">
                            <input type="course" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="search course" required="required">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect2" required="required">
                                <option>Default select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <button type="submit" class="btns btn-primary">Submit</button>
                    </form>
                </div>

                <?= coursepage::widget()?>

            </div>

            <div class="col-sm-4">
                <div class="Categories">
                    <h1>Categories</h1>
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Art & Design </a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Business </a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>IT & Software </a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Languages </a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Programming </a></li>
                    </ul>
                </div>

                 <?= latestside::widget() ?>

                <div class="Categories-Instagram">
                    <h1>Instagram</h1>
                    <ul>
                        <li><a href="#"><img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery_1.jpg"></a></li>
                        <li><a href="#"><img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery_2.jpg"></a></li>
                        <li><a href="#"><img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery_3.jpg"></a></li>
                        <li><a href="#"><img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery_4.jpg"></a></li>
                        <li><a href="#"><img src="<?=Yii::$app->view->theme->baseUrl;?>/images/gallery_5.jpg"></a></li>
                    </ul>
                </div>

                <div class="Categories-Tags">
                    <h1>Tags</h1>
                    <ul>
                        <li><a href="#">Art & Design </a></li>
                        <li><a href="#">Business </a></li>
                        <li><a href="#">IT & Software </a></li>
                        <li><a href="#">Languages </a></li>
                        <li><a href="#">Programming </a></li>
                    </ul>
                </div>
                <div class="download">
                    <div class="download-book">
                        <h2>free ebook</h2>
                        <a href="#">download now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>