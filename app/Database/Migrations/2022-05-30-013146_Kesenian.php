<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kesenian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'kode_peserta' => [
                'type' => 'varchar',
                'constraint' => 6,
                'null' => FALSE
            ],
            'menyanyi' => [
                'type' => 'text',
                'null' => FALSE
            ],
            'menari' => [
                'type' => 'text',
                'null' => FALSE
            ],
            'alat_musik' => [
                'type' => 'text',
                'null' => FALSE
            ],
            'keterampilan_lainnya' => [
                'type' => 'FLOAT',
                'null' => FALSE
            ],
            'total_nilai' => [
                'type' => 'FLOAT',
                'default' => 0
            ],
            
            'created_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('kesenian', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kesenian');
    }
}
