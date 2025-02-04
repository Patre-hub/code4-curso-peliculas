<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peliculas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Peli_id' => [
                'type'           => 'SMALLINT',
                'constraint'     => 5,   // Máximo para SMALLINT (0-65535 si UNSIGNED)
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'Peli_titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
            ],
            'Peli_descripcion' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('Peli_id');
        $this->forge->createTable('peliculas', true); 
    }

    public function down()
    {
        $this->forge->dropTable('peliculas', true);
    }
}
