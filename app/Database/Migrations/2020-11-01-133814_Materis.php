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
			'nama_materi' => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'deskripsi' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
		]);
		$this->forge->addKey('kode_materi', true);
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
