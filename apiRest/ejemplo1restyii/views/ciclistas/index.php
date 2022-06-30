<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Ciclista;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CiclistaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciclistas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclista-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Ciclista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'dorsal',
            'nombre',
            'edad',
            'nomequipo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ciclista $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'dorsal' => $model->dorsal]);
                }
            ],
        ],
    ]);
    ?>


</div>
