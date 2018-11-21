<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\latestnews */

$this->title = 'Create Latestnews';
$this->params['breadcrumbs'][] = ['label' => 'Latestnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="latestnews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
