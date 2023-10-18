<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'admin',
            'displayname' => 'admin',
            'first_name' => 'Super',
            'middle_name' => 'Duper',
            'last_name' => 'Admin',
            'userlevel' => '1',
            'is_active' => '1',
            'email'    => 'admin@admin.com',
            'password' => password_hash('test', PASSWORD_BCRYPT),
            'date_registered' => date('Y-m-d H:i:s'),
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users 
        //                 (username, displayname, first_name, middle_name, last_name, userlevel, email, password)
        //                 VALUES
        //                 (:username:, :displayname:, :first_name:, :middle_name:, :last_name:, :userlevel:, :email:, :password:)', 
        //                 $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
