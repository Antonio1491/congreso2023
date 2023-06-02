<?php

namespace Controllers;
use MVC\Router;

class SesionesController
{

  public static function index(Router $router)
  {
    $router->render('convocatorias/sesiones',
    [
      'title' => 'Convocatoria Sesiones Educativas',
      'mensaje' => 'Desde Sesioones'
    ]
  );
  }

}