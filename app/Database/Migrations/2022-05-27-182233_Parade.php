<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Parade extends Migration
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
            'tinggi_badan' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'berat_badan' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'mata' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'bahu' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'tangan' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'kaki' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'platefoot' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'total_nilai' => [
                'type' => 'double',
                'null' => FALSE
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
        $this->forge->createTable('parade', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('parade');
    }
}
