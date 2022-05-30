<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Samapta extends Migration
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
            'lari' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'sit_up' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'push_up' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'shuttle_run' => [
                'type' => 'INT',
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
        $this->forge->createTable('samapta', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('samapta');
    }
}
