<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Isimateris extends Migration
{
	private $table = 'isimateris';

	public function up()
	{
		$this->forge->addField([
			'id_isimateri' => [
					'type'           => 'INT',
					'constraint'     => '4',
					'auto_increment' => TRUE,
			],
			'kode_materi' => [
					'type'           => 'VARCHAR',
					'constraint'     => '6',
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
		$this->forge->addKey('id_isimateri', true);
		$this->forge->addForeignKey('kode_materi', 'materis', 'kode_materi', 'CASCADE', 'CASCADE');
		$this->forge->createTable($this->table);

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
