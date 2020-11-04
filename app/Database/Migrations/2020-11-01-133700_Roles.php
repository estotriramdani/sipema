<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
	private $table = 'roles';

	public function up()
	{
		$this->forge->addField([
			'role_id' => [
					'type'           => 'INT',
					'constraint'     => '1',
			],
			'role_name' => [
					'type'           => 'VARCHAR',
					'constraint'     => '10',
			],
		]);
		$this->forge->addKey('role_id', true);
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
