<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<div class="container">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'coursename') ?>
    <?= $form->field($model, 'message') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
