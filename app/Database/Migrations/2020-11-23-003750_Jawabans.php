<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jawabans extends Migration
{
	private $table = 'jawabans';

	public function up()
	{
		$this->forge->addField([
			'id_jawaban' => [
				'type'           => 'INT',
				'constraint'     => '5',
				'auto_increment' => TRUE,
			],
			'id_soal' => [
				'type'           => 'INT',
				'constraint'     => '5',
			],
			'user_id' => [
				'type'           => 'INT',
				'constraint'	 => '10',
				'unsigned'		 => TRUE,
			],
			'jawaban_user' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
		]);
		$this->forge->addKey('id_jawaban', true);
		$this->forge->addForeignKey('id_soal', 'soals', 'id_soal', 'CASCADE');
		$this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
