<?php namespace App\Database\Migrations;

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
			'pilihan1' => [
					'type'           => 'VARCHAR',
					'constraint'     => '200',
			],
			'pilihan2' => [
					'type'           => 'VARCHAR',
					'constraint'     => '200',
			],
			'pilihan3' => [
					'type'           => 'VARCHAR',
					'constraint'     => '200',
			],
			'pilihan4' => [
					'type'           => 'VARCHAR',
					'constraint'     => '200',
			],
			'jawaban_user' => [
					'type'           => 'TEXT',
			],
			'jawaban' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'nilai_soal' => [
					'type'           => 'INT',
					'constraint'	 => '2',
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
		$this->forge->addForeignKey('kode_materi', 'materis', 'kode_materi', 'CASCADE', 'CASCADE');
		$this->forge->createTable($this->table);

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
