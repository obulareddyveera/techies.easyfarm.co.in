<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Priorities extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'	=> [
				'type'	=> 'VARCHAR',
				'constraint' => '100',
			],
			'description' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'sequence' => [
				'type' => 'INT',
				'constraint' => '5',
			],
			'updated_at' => [
				'type' => 'DateTime',
			],
			'created_at' => [
				'type' => 'DateTime',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('priorities');
	}

	public function down()
	{
		$this->forge->dropTable('priorities');
	}
}
