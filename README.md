<p align="center">
    <a href="" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Prueba Tecnica Emoac</h1>
    <br>
</p>

Proyecto basado en PHP con Yii2. Hecho por Alejandro Flores, Ingeniero en informática.

Este proyecto consta de un CRUD de productos, cada producto contiene una imagen y otros datos. Posee un sistema de sesión local hecho en base a yii2, el cual se requiere para acceder al CRUD, las credenciales son "admin/admin".

La instalación de este proyecto requiere lo siguiente:

Requerimientos
------------

- Docker Desktop.
- Composer.

Descargas
------------

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Composer](https://getcomposer.org/download/)

Instalación
------------
Lo primero es crear los contenedores con sus imágenes, para ello ejecutamos los siguientes comandos en la terminal del `proyecto`:

~~~
sh install.sh
~~~

Una vez que instalamos las imagenes, se tiene que aplicar la `migración` de información a la base de datos, para ello ejecutamos el siguiente comando en la terminal del proyecto:

~~~
docker exec -i crudyii2_alejandro php yii migrate/up
~~~



**Sobre mí:** 
- Hecho por Alejandro Flores.
- Correo floresorellanaalejandro@gmail.com .


