<?php

use app\models\Radiacion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RadiacionSerach $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Radiacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radiacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Radiacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'enero',
            'febrero',
            'marzo',
            'abril',
            //'mayo',
            //'junio',
            //'julio',
            //'agosto',
            //'septiembre',
            //'octubre',
            //'noviembre',
            //'diciembre',
            'estado_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Radiacion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
