<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\sliderimagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliderimages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliderimages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sliderimages', ['addimage' , 'id' => Yii::$app->getRequest()->getQueryParam('id'), $model], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                'id',
                'slider_id',
                'title',
                'description',
                'images',
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{editslider} {deleteslider}',
            'buttons' =>
                [
                    'editslider' => function($url, $model) {
                    return Html::a('<span class="fa fa-pencil-square-o"></span>', ['editslider', 'id' => $model->id]);
                },
                    'deleteslider' => function($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['deleteslider', 'id' => $model->id], [
                            'data' => ['confirm' => Yii::t('app', 'Are you sure you want to delete this Slide?'), 'method' => 'post']
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
