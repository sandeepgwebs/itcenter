<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\coursecatgories */

$this->title = 'Update Coursecatgories: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Coursecatgories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coursecatgories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
