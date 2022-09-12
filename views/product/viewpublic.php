<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<div class="product-view">

    <h1>Detalle</h1>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <?= Html::img($model->image, ['class'=>'d-block mx-lg-auto img-fluid', 'width'=>'700', 'height'=>'500']); ?>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3"><?= Html::encode("{$model->name}"); ?></h1>
                <p class="lead"><?= Html::encode("{$model->description}"); ?></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <?= Html::a('Volver a productos', ['btnproduct'], ['class' => 'btn btn-primary btn-lg px-4 me-md-2']) ?>
                <?= Html::a('Inicio', ['btnhome'], ['class' => 'btn btn-success btn-lg px-4']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
