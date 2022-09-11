<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../web/resources/products.png" alt="" width="72" height="57">
        <h2>Formulario</h2>
        <p class="lead">En este formulario puede ingresar y modificar productos.</p>
    </div>

    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">

        </div>

        <?php $form = ActiveForm::begin(); ?>

        <div class="col-md-8 col-lg-12">
            <h4 class="mb-3">Detalles de producto</h4>
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>                        
                    </div>

                    <div class="col-sm-6">
                        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
                    </div>                
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Imagen de producto</h4>
                
                <div class="col-12" class="form-control">

                    <label for="imagefile" class="form-label">Ejemplo de entrada de archivo predeterminado</label>
                    <?= Html::img( $model->image, ['width'=>'100px'] ); ?>                 

                    <?= $form->field($model, 'imagefile')->fileInput() ?>
                </div>

                <hr class="my-4">
                                
                <?= Html::submitButton('Guardar producto', ['class' => 'w-100 btn btn-primary btn-lg']) ?>

            </form>
        </div>

        <?php ActiveForm::end(); ?>
    </div>    

</div>
