<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculasModel extends Model{
    protected $table = 'peliculas';
    protected $primaryKey = 'Peli_id';
    protected $allowedFields = ['Peli_titulo', 'Peli_descripcion'];
}
