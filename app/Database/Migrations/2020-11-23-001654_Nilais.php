<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Nilais extends Migration
{
	private $table = 'nilais';

	public function up()
	{
		$this->forge->addField([
			'id_nilai' => [
				'type'           => 'INT',
				'constraint'     => '5',
				'auto_increment' => TRUE,
			],
			'email' 		 => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '40',
			],
			'kode_materi' => [
				'type'           => 'VARCHAR',
				'constraint'	 => '6',
			],
			'nilai' => [
				'type'           => 'INT',
				'constraint'     => '3',
				'default'        => 0,
			],
			'created_at' => [
				'type'			=> 'DATETIME',
				'null'			=> TRUE,
			],
			'updated_at' => [
				'type'			=> 'DATETIME',
				'null'			=> TRUE,
			],
		]);
		$this->forge->addKey('id_nilai', true);
		//$this->forge->addForeignKey('kode_materi', 'materis', 'kode_materi', 'CASCADE');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
