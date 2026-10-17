<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateRoleInUsersTable extends Migration
{
    public function up()
    {
        // New accounts are students by default (roles: admin, teacher, student)
        $this->forge->modifyColumn('users', [
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'student',
            ],
        ]);

        // Accounts made in Lab 4 had the role "user"; they become students
        $this->db->table('users')->where('role', 'user')->update(['role' => 'student']);
    }

    public function down()
    {
        $this->forge->modifyColumn('users', [
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'user',
            ],
        ]);
    }
}