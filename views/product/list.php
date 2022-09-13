<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Lista productos';
?>
<div class="site-index">

    <div class="px-2 py-3 my-3 text-center">
        <img class="d-block mx-auto mb-4" src="../web/resources/products.png" alt="" width="150" height="120">
        <h1 class="display-5 fw-bold">Productos</h1>
        <p class="lead mb-4">Listado de productos.</p>
    </div>

    <div class="body-content">

    

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($products as $product): ?>
            <div class="col">
                <div class="card" >
                    <div class="card-img-top object-fit">
                        <?= Html::img($product->image, ['class'=>'card-img-top object-fit', 'width'=>'300px', 'height'=>'300']); ?>
                    </div>
                    <div class="card-body" style="align-content:center">
                        <h5 class="card-title"><?= Html::encode("{$product->name}"); ?></h5>
                        <br />                        
                        <?= Html::a('Ver detalle producto', ['viewpublic','id' => $product->id], ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>        
    </div>
        
</div>

    

    <?= LinkPager::widget(['pagination'=>$pagination]) ?>
</div>
