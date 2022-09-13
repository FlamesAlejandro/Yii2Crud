<?php

use app\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */
/** @var app\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="resources/products.png" alt="" width="72" height="57">
        <h2>Listado de Productos</h2>
        <p class="lead">Vista en general de los productos creados. Funcionalidad de editar, ver y eliminar productos.</p>
        <?= Html::a('Crear Producto', ['create'], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            [
                'format'=>'html',
                'value'=>function($data){ return Html::img($data->image, ['width'=>'90px']); }, 
            ]
            ,
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
        
    ]); ?>

</div>
