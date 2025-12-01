<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $data = [
            [
                'fullname'      => 'John Doe',
                'email'         => 'john@example.com',
                'password_hash' => $password,
                'account_status'=> 1,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'fullname'      => 'Jane Smith',
                'email'         => 'jane@example.com',
                'password_hash' => $password,
                'account_status'=> 1,
                'created_at'    => $now,
                'updated_at'    => $now,
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
