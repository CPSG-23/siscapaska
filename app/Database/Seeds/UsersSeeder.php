<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'yahya',
            'password' => password_hash('yahya123',password_default),
            'hak_access' => 'Administrator'
        ];
        $this->db->table('users')->insert($data);
    }
}
