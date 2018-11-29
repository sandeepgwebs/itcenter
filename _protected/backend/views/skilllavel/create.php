<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\skilllavel */

$this->title = 'Create Skilllavel';
$this->params['breadcrumbs'][] = ['label' => 'Skilllavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skilllavel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
