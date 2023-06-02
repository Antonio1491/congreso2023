<?php 

namespace Iscgo\Congreso2023\models;

use Iscgo\Congreso2023\includes\config\Database;

class Temas extends Database{

  public function __construct(private string $tema, private string $descripcion)
  {
    parent ::__construct();
  }
}