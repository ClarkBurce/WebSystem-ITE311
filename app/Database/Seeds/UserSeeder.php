<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'System Admin',  'email' => 'admin@lms.com',   'password' => 'admin123',   'role' => 'admin'],
            ['name' => 'Juan Teacher',  'email' => 'teacher@lms.com', 'password' => 'teacher123', 'role' => 'teacher'],
            ['name' => 'Maria Student', 'email' => 'student@lms.com', 'password' => 'student123', 'role' => 'student'],
        ];

        $builder = $this->db->table('users');

        foreach ($users as $user) {
            // Skip accounts that already exist so the seeder can be run again safely
            if ($builder->where('email', $user['email'])->countAllResults() > 0) {
                continue;
            }

            $builder->insert([
                'name'       => $user['name'],
                'email'      => $user['email'],
                'password'   => password_hash($user['password'], PASSWORD_DEFAULT),
                'role'       => $user['role'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}