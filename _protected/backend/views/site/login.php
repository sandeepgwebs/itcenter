<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'Login');
?>
<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>Welcome to IN+</h3>
        <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>

        <div class="col-lg-12 well bs-component">

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?php //-- use email or username field depending on model scenario --// ?>

                <?php if ($model->scenario === 'lwe'): ?>

                    <?= $form->field($model, 'email') ?>

                <?php else: ?>

                <?= $form->field($model, 'username') ?>
            <?php endif ?>

            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>


        </div>
    </div>
        </div>
</div>
</body>