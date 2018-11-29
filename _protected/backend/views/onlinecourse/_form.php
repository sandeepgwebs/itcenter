<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\onlinecourse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="onlinecourse-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'coursecatgories_id')->dropDownList(ArrayHelper::map(common\models\Coursecatgories::find()->asArray()->all(), 'id', 'name'),['prompt'=>'Select Any Course'])?>


    <?= $form->field($model, 'sub_course_id')->dropDownList(ArrayHelper::map(common\models\Sub_course::find()->asArray()->all(), 'id', 'name'),['prompt'=>'Select Any Course'])?>


    <?= $form->field($model, 'skilllavel_id')->dropDownList(ArrayHelper::map(common\models\skilllavel::find()->asArray()->all(), 'id', 'name'),['prompt'=>'Select Any Course'])?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
