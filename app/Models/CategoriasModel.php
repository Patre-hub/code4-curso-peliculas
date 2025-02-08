<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriasModel extends Model{
  protected $table = 'categorias';
  protected $primaryKey = 'Catego_id';
  protected $allowedFields = ['Catego_titulo'];
}
