<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pbb extends Migration
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
            'sikap_sempurna' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'sikap_hormat' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'sikap_istirahat' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'langkah_tegap' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'jalan_ditempat' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'hadap_kanan_kiri' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'hadap_serong_kanan_kiri' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'balik_kanan' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'langkah_lrfb' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'kesigapan' => [
                'type' => 'INT',
                'null' => FALSE
            ],
            'total_nilai' => [
                'type' => 'FLOAT',
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
        $this->forge->createTable('pbb', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('pbb');
    }
}
