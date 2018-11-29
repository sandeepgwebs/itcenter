<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\onlinecourse */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Onlinecourses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="onlinecourse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'coursecatgories_id',
            'sub_course_id',
            'skilllavel_id',
            'name',
            'description',
            'teacher',
            'Price',
            'image',
        ],
    ]) ?>

</div>
