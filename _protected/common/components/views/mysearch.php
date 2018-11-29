<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\coursecatgories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coursecatgories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'search')->textInput() ?>

    <?= $form->field($model, 'course')->textInput() ?>

    <?= $form->field($model, 'skilllavel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
