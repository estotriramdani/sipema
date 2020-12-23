<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Soals extends Migration
{
	private $table = 'soals';

	public function up()
	{
		$this->forge->addField([
			'id_soal' => [
				'type'           => 'INT',
				'constraint'     => '5',
				'auto_increment' => TRUE,
			],
			'kode_materi' => [
				'type'           => 'VARCHAR',
				'constraint'     => '6',
			],
			'pertanyaan' => [
				'type'           => 'TEXT',
			],
			'pilihan_a' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'pilihan_b' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'pilihan_c' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'pilihan_d' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'jawaban' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
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
		$this->forge->addKey('id_soal', true);
		//$this->forge->addForeignKey('kode_materi', 'materis', 'kode_materi');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
