<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="resources/products.png" alt="" width="150" height="120">
        <h1 class="display-5 fw-bold">Tienda de productos</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Bienvenido a nuestra tienda. 
            Puede revisar todos los productos ingresados en la ventana de productos haciendo click en el primer botón.</p>
            <p class="lead mb-4"> 
            El segundo Botón es el mantenedor de productos, en el se encuentra el CRUD y un listado más personalizado. Necesita iniciar sesión para poder ver el botón</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <?= Html::a('Ver productos', ['btnproduct'], ['class' => 'btn btn-primary btn-lg px-4 gap-3']) ?>
            <?= Html::a('Mantenedor', ['btnhome'], ['class' => 'btn btn-success btn-lg px-4']) ?>
        </div>
        </div>
    </div>

    <hr />

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="resources/gith.png" alt="" width="150" height="120">
        <h1 class="display-5 fw-bold">Proyecto productos</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Proyecto basado en PHP con Yii2, Diseño en Bootstrap5</p>
        <p class="lead mb-4">Alejandro Flores, Ingeniero en Informática</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="https://github.com/FlamesAlejandro/Yii2Crud" class="btn btn-outline-dark" tabindex="-1" role="button" aria-disabled="true">Ir al repositorio</a>
        </div>
        </div>
    </div>

</div>
