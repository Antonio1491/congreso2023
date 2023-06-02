<?php

require __DIR__ . '/../vendor/autoload.php';

// include_once __DIR__. '/../app/includes/templates/head.php';

use MVC\Router;
use Controllers\PropiedadController;
use Controllers\SesionesController;

$router = new Router();

$router->get('/admin', [PropiedadController::class, 'index']);
$router->get('/posters', 'funcion_posters');
$router->get('/convocatoria_sesiones', [SesionesController::class, 'index']);

$router->comprobarRutas();

