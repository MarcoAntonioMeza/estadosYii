<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Radiacion $model */

$this->title = 'Create Radiacion';
$this->params['breadcrumbs'][] = ['label' => 'Radiacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radiacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
