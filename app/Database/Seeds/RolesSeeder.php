<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesSeeder extends Seeder
{
        public function run()
        {
                $data = [
                    [
                        'role_id'       => '1',
                        'role_name'     => 'Admin',  
                    ],
                    [
                        'role_id'       => '2',
                        'role_name'     => 'Guru',  
                    ],
                    [
                        'role_id'       => '3',
                        'role_name'     => 'Siswa',  
                    ],

                ];

                // // Simple Queries
                // $this->db->query("INSERT INTO roles (role_id, role_name) VALUES(:role_id:, :role_name:)",
                //         $data
                // );

                // Using Query Builder
                $this->db->table('roles')->insertBatch($data);
        }
}