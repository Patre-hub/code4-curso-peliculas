<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Catego_id' => [
                'type'           => 'TINYINT',
                'constraint'     => 3,   // Máximo para TINYINT (0-255 si UNSIGNED)
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'Catego_titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
        ]);
        $this->forge->addPrimaryKey('Catego_id');
        $this->forge->createTable('categorias', true);
    }

    public function down()
    {
        $this->forge->dropTable('categorias', true);
    }
}
