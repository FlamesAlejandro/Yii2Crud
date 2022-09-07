<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Alejandro Flores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Proyecto hecho en base a PHP con yii2.
    </p>

    <code><?= __FILE__ ?></code>
</div>
