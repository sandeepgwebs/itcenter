<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\coursecatgories */

$this->title = 'Create Coursecatgories';
$this->params['breadcrumbs'][] = ['label' => 'Coursecatgories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coursecatgories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
