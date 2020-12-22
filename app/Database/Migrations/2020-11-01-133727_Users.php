<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	private $table = 'users';

	public function up()
	{
		$this->forge->addField([
			'user_id' => [
				'type'           => 'INT',
				'constraint'     => '10',
				'unsigned'		 => TRUE,
				'auto_increment' => TRUE,
			],
			'email' 		 => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '40',
			],
			'password'		 => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'kode_identitas' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'jenis_kelamin' => [
				'type'           => 'ENUM',
				'constraint'     => ['Laki-laki', 'Perempuan'],
				'default'		 => 'Laki-laki',
			],
			'alamat' => [
				'type'			 => 'TEXT',
			],
			'tempat_lahir' => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '100',
			],
			'tanggal_lahir' => [
				'type'			 => 'DATE'
			],
			'role_id' => [
				'type'           	=> 'INT',
				'constraint'     	=> '1',
			],
			'created_at' => [
				'type'				=> 'DATETIME',
				'null'				=> TRUE,
			],
			'updated_at' => [
				'type'			=> 'DATETIME',
				'null'			=> TRUE,
			],
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
