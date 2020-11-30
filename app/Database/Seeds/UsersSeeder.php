<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'kode_identitas' => 'SIPEMA',
			'nama'    		 => 'Admin',
			'email'			 => 'adminsipema@gmail.com',
			'password'		 => password_hash('admin', PASSWORD_DEFAULT),
			'foto'			 => 'default.jpg',
			'tanggal_lahir'  => Time::today(),
			'role_id' 		 => 2,
			'created_at'     => Time::now(),
			'updated_at'     => Time::today(),
		];

		// Simple Queries
		$this->db->query(
			"INSERT INTO users (kode_identitas, nama, email, password, foto, tanggal_lahir, role_id, created_at, updated_at) 
						  VALUES(:kode_identitas:, :nama:, :email:, :password:, :foto:, :tanggal_lahir:,:role_id:, :created_at:, :updated_at:)",
			$data
		);
		$data = [
			'kode_identitas' => 'SiswaTest',
			'nama'    		 => 'Siswa Test',
			'email'			 => 'test@test.com',
			'password'		 => password_hash('123', PASSWORD_DEFAULT),
			'foto'			 => 'default.jpg',
			'tanggal_lahir'  => Time::today(),
			'role_id' 		 => 3,
			'created_at'     => Time::now(),
			'updated_at'     => Time::today(),
		];

		// Simple Queries
		$this->db->query(
			"INSERT INTO users (kode_identitas, nama, email, password, foto, tanggal_lahir, role_id, created_at, updated_at) 
						  VALUES(:kode_identitas:, :nama:, :email:, :password:, :foto:, :tanggal_lahir:,:role_id:, :created_at:, :updated_at:)",
			$data
		);

		// //Data Dummy--------------------------------
		// $faker = \Faker\Factory::create('id_ID');

		// for ($i=0; $i < 10; $i++) { 
		// 	$dataFake = [
		// 		[
		// 			'kode_identitas' => 'GURU'.$i,
		// 			'nama'    		 => $faker->name('male'),
		// 			'foto'			 => '',
		// 			'alamat'		 => $faker->address(),
		// 			'tanggal_lahir'  => Time::createFromTimestamp($faker->unixTime()),
		// 			'role_id' 		 => 2,
		// 			'created_at'     => Time::now(),
		// 			'updated_at'     => Time::today(),
		// 		],
		// 		[
		// 			'kode_identitas' => 'SISWA'.$i,
		// 			'nama'    		 => $faker->name('male'),
		// 			'foto'			 => '',
		// 			'alamat'		 => $faker->address(),
		// 			'tanggal_lahir'  => Time::createFromTimestamp($faker->unixTime()),
		// 			'role_id' 		 => 3,
		// 			'created_at'     => Time::now(),
		// 			'updated_at'     => Time::today(),
		// 		],
		// 	];
		// 	// Using Query Builder
		// 	$this->db->table('users')->insertBatch($dataFake);
		// }
	}
}
