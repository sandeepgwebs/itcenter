<?php
use common\components\homepageslide;

use common\components\onlinecoursess;

use common\components\eventseven;

use common\components\newnews;

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;
?>
<?= homepageslide::widget()?>


<div class="container">
    <div class="slider-form">
        <form id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between" action="#">
            <?php $form = ActiveForm::begin([
                'action'  => ['search'],
                'method'  => 'get',
             ]);?>
            <div class="d-flex flex-row align-items-center justify-content-start">
                <input class="home_search_input" name="search" placeholder="Keyword Search"   type="search">

                <div class="dropdown_item_select home_search_input ">
                    <?= $form->field($model, 'name')->dropDownList(ArrayHelper::map(common\models\Onlinecourse::find()->asArray()->all(), 'id', 'name'),['prompt'=>'Select Any Course'])?>
                </div>

                <div class="dropdown_item_select home_search_input ">
                    <?= $form->field($model, 'name')->dropDownList(ArrayHelper::map(common\models\Onlinecourse::find()->asArray()->all(), 'id', 'rate'),['prompt'=>'Course Price'])?>
                </div>

            </div>
            <?= Html::submitButton('Submit', ['submit'],['class' => 'home_search_button']) ?>
            <?php ActiveForm::end(); ?>
        </form>
    </div>
</div>



<div class="learning">
    <div class="container">
        <h1>Welcome To Unicat E-Learning</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
        <div class="Courses">
            <div class="row">
                <div class="col-sm-3">
                    <div class="expert">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/icon_1.png">
                        <h1>The Experts</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="expert">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/icon_2.png">
                        <h1>Book & Library</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="expert">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/icon_3.png">
                        <h1>Best Courses</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="expert">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/icon_4.png">
                        <h1>Award & Reward</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="online-course">
    <div class="learning">
        <div class="container">
            <h1>Popular Online Courses</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
        </div>
    </div>

     <?= onlinecoursess::widget()?>

    <div class="view-all">
        <a href="#">view all</a>
    </div>
</div>

<div class="register">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form1">
                    <h1>Register Now</h1>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dumy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <ul>
                        <li><span>15</span>years</li>
                        <li><span>120k</span>years</li>
                        <li><span>670+</span>years</li>
                        <li><span>320</span>years</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form">
                    <h1>courses now</h1>
                    <?php $form = ActiveForm::begin(); ?>
                        <div class="form-group">
                            <?= $form->field($model, 'name') ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'email') ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'coursename')->dropDownList(ArrayHelper::map(common\models\Onlinecourse::find()->asArray()->all(), 'name', 'name'),['prompt'=>'Select Any Course'])?>
                        </div>

                        <div class="form-group1">
                            <?= $form->field($model, 'message')->textArea(['rows' => 6]) ?>
                        </div>

                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>

                     <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="events">
    <div class="container">
        <div class="learning">
            <h1>Upcoming events</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
        </div>

         <?= eventseven::widget()?>

        </div>
    </div>
</div>

<div class="best-town">
    <div class="container">
        <div class="learning">
            <h1>The Best Tutors in Town</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="masto1">
                    <div class="masto">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/team_1.jpg">
                        <a href="#">Jacke Masito</a>
                        <p>Marketing & Management</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="masto1">
                    <div class="masto">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/team_2.jpg">
                        <a href="#">Jacke Masito</a>
                        <p>Marketing & Management</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="masto1">
                    <div class="masto">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/team_3.jpg">
                        <a href="#">Jacke Masito</a>
                        <p>Marketing & Management</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="masto1">
                    <div class="masto">
                        <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/team_4.jpg">
                        <a href="#">Jacke Masito</a>
                        <p>Marketing & Management</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="latest">
    <div class="container">
        <div class="learning">
            <h1>Latest News</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
        </div>

        <?= newnews::widget()?>

    </div>
</div>

<div class="news-offer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="smartphones">
                    <h1>sign up for news and offers</h1>
                    <p>Subcribe to lastest smartphones news & great deals we offer</p>
                </div>
            </div>

            <div class="col-sm-6">
                <form class="form-inline">
                    <div class="form-group mb-2">
                        <input type="text"  id="staticEmail2" value="" placeholder="Your Email" required="required">
                    </div>
                    <button type="submit" class="mybtn btn-primary mb-2">subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>