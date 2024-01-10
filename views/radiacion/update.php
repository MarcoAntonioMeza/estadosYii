<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Radiacion $model */

$this->title = 'Update Radiacion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Radiacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="radiacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
