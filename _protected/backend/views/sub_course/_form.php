<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\sub_course */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'coursecatgories_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
