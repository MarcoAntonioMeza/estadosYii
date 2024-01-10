<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\RadiacionSerach $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="radiacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enero') ?>

    <?= $form->field($model, 'febrero') ?>

    <?= $form->field($model, 'marzo') ?>

    <?= $form->field($model, 'abril') ?>

    <?php // echo $form->field($model, 'mayo') ?>

    <?php // echo $form->field($model, 'junio') ?>

    <?php // echo $form->field($model, 'julio') ?>

    <?php // echo $form->field($model, 'agosto') ?>

    <?php // echo $form->field($model, 'septiembre') ?>

    <?php // echo $form->field($model, 'octubre') ?>

    <?php // echo $form->field($model, 'noviembre') ?>

    <?php // echo $form->field($model, 'diciembre') ?>

    <?php // echo $form->field($model, 'estado_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
