<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<div class="product-view">

    <h1>Detalle</h1>
    
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1"><?= Html::encode("{$model->name}"); ?></h1>
            <p class="lead"><?= Html::encode("{$model->description}"); ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <br />
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Volver a Productos</button>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <?= Html::img($model->image, ['class'=>'rounded-lg-3', 'width'=>'400', 'height'=>'350']); ?>
        </div>
        </div>
    </div>
      

</div>
