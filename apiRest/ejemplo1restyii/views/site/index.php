<?php
/** @var yii\web\View $this */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">API Y APLICACION EN ALPE</h1>

        <p class="lead">SERVIDOR API REST Y APLICACION DESARROLLADA EN PHP</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Peliculas</h2>
                <ul>
                    <li>index.php/pelicula  Todas las peliculas</li>
                    <li>index.php/pelicula/1  pelicula 1</li>
                    <li>index.php/pelicula/campo=id,nombre  el id y el campo de todas las peliculas</li>
                    <li>index.php/pelicula/campo=id,nombre&id=1  el id y el nombre de la pelicula con id 1</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h2>Ciclistas</h2>
                <ul>
                    <li>index.php/ciclista  Todos los ciclistas</li>
                    <li>index.php/ciclista  ciclista 1</li>
                    <li>index.php/ciclista/campo=dorsal,nombre  el dorsal y el campo de todos los ciclistas</li>
                    <li>index.php/ciclista/campo=dorsal,nombre&dorsal=1  el id y el nombre del ciclista con dorsal 1</li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>Campos Peliculas</h2>
                <ul>
                    <li>id</li>
                    <li>nombre</li>
                    <li>anno</li>
                    <li>duracion</li>
                    <li>clasificacion</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h2>Campos Ciclistas</h2>
                <ul>
                    <li>dorsal</li>
                    <li>nombre</li>
                    <li>edad</li>
                    <li>nomequipo</li>
                </ul>
            </div>

        </div>

    </div>
</div>
