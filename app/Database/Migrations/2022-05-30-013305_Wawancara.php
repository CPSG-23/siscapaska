<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wawancara extends Migration
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
            'sikap' => [
                'type' => 'FLOAT',
                'default' => 0,
                'null' => FALSE
            ],
            'cara_bicara' => [
                'type' => 'FLOAT',
                'default' => 0,
                'null' => FALSE
            ],
            'pemakaian_bahasa' => [
                'type' => 'FLOAT',
                'default' => 0,
                'null' => FALSE
            ],
            'kemampuan_menjawab' => [
                'type' => 'FLOAT',
                'default' => 0,
                'null' => FALSE
            ],
            'kemampuan_komputer' => [
                'type' => 'FLOAT',
                'default' => 0,
                'null' => FALSE
            ],
            'total_nilai' => [
                'type' => 'FLOAT',
                'default' => 0,
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
        $this->forge->createTable('wawancara', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('wawancara');
    }
}
