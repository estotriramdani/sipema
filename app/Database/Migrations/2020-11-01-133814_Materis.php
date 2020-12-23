<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materis extends Migration
{
	private $table = 'materis';

	public function up()
	{
		$this->forge->addField([
			'kode_materi' => [
				'type'           => 'VARCHAR',
				'constraint'     => '6',
			],
			'email' 		 => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '40',
			],
			'nama_materi' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'deskripsi' => [
				'type'           => 'TEXT',
			],
			'isi_materi' => [
				'type'           => 'TEXT',
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
		$this->forge->addKey('kode_materi', true);
		// $this->forge->addForeignKey('kode_materi', 'materis', 'kode_materi', 'CASCADE', 'CASCADE');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
