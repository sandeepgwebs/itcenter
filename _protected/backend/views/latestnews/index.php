<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\latestnewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Latestnews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="latestnews-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Latestnews', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'adminname',
            'date',
            'discription',
            'images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
