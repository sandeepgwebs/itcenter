<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\latestnews */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Latestnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="latestnews-view">

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
        <?= Html::a('Back to Homepage', ['latestnews/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'adminname',
            'date',
            'discription',
            'images',
        ],
    ]) ?>

</div>
