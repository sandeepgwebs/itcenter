<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<div class="pagers">
    <div class="container">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li>contact</li>
        </ul>
    </div>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27544.576337453367!2d76.37043293955078!3d30.348902399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1542367422978" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="registers">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form">
                    <h1>Contact Form</h1>
                    <?php $form = ActiveForm::begin(); ?>

                        <div class="form-group">
                            <?= $form->field($model, 'name') ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'email') ?>
                         </div>

                        <div class="form-group1">
                            <?= $form->field($model, 'message')->textarea(['rows' => 8]) ?>
                        </div>

                         <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form1">
                    <h1>Contact Info</h1>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dumy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <div class="footer-logo">
                        <h2>New York Office</h2>
                    </div>
                    <div class="social">
                        <ul>
                            <li>Email: Info.deercreative@gmail.com</li>
                            <li>Phone: +(88) 111 555 666</li>
                            <li>40 Baria Sreet 133/2 New York City, United States</li>
                        </ul>
                    </div>

                    <div class="footer-logo">
                        <h2>Australia Office</h2>
                    </div>
                    <div class="social">
                        <ul>
                            <li>Email: Info.deercreative@gmail.com</li>
                            <li>Phone: +(88) 111 555 666</li>
                            <li>40 Baria Sreet 133/2 New York City, United States</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
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