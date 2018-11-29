<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\onlinecourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Onlinecourses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="onlinecourse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Onlinecourse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'coursecatgories_id',
            'sub_course_id',
            'skilllavel_id',
            'name',
            'description',
            'teacher',
            'Price',
            [
                //view images backend
                'attribute'=>'images',
                'value' => function ($model) {
                    return \yii\helpers\Html::img('@uploads/onlinecourse/' .$model->image,[ 'width' => '80px', 'height' => '80px']);
                },
                'format' => 'raw',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
