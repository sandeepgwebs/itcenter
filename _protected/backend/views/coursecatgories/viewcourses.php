<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\sub_courseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-course-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         <?= Html::a('Create Course', ['addimage' , 'id' => Yii::$app->getRequest()->getQueryParam('id'), $model], ['class' => 'btn btn-success']) ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'coursecatgories_id',
            'name',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{editcourse} {deletecourse}',
                'buttons' => [
                    'editcourse' => function($url, $model) {
                        return Html::a('<span class="fa fa-pencil-square-o"></span>', ['editcourse', 'id' => $model->id]);
                    },
                    'deletecourse' => function($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['deletecourse', 'id' => $model->id], [
                            'data' => ['confirm' => Yii::t('app', 'Are you sure you want to delete this Slide?'), 'method' => 'post']
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
