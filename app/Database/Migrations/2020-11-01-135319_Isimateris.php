<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Isimateris extends Migration
{
	private $table = 'isimateris';

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
			'judul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'isi' => [
				'type'           => 'TEXT',
			],
			'status' => [
				'type'           => 'INT',
				'constraint'	 => '1',
				'default'        => '1',
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
