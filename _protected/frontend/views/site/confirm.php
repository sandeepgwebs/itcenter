<?= \yii\grid\GridView::widget([
    'dataProvider'  => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'name',
        ['class' => 'yii\grid\ActionColumn'],
    ],
    ]);