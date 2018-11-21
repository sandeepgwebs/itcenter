<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\latestnews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="latestnews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adminname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'images')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back yo Homepage',['latestnews/index'],['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
