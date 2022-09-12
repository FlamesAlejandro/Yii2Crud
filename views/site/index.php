<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="../web/resources/products.png" alt="" width="150" height="120">
        <h1 class="display-5 fw-bold">Tienda de productos</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Bienvenido a nuestra tienda "Inserte nombre generico" de productos. Puede revisar nuestro listado completo de mercadería en la ventana de productos o haciendo click en el primero botón. 
            Segundo Botón es el mantenedor de productos, necesita estar ingresado con cuenta de administrador</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Ver productos</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Mantenedor</button>
        </div>
        </div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Productos</h1>

        <p class="lead mb-4">Listado de productos destacados.</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card">
                    <img src="../web/resources/xbox.png" class="card-img-top" height="400" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col" width="100%" height="200">
                <div class="card" width="100%" height="200">
                    <img src="../web/resources/ps5.jpg" class="card-img-top" height="400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col" width="100%" height="200">
                <div class="card">
                    <img src="../web/resources/gamingpc.png" class="card-img-top object-fit" height="400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../web/resources/steamdeck.jpg" class="card-img-top object-fit" height="400" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../web/resources/volante.png" class="card-img-top object-fit" height="400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../web/resources/vrset.png" class="card-img-top object-fit" height="400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
