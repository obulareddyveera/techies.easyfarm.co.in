<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Questions extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'TEXT',
			],
			'priority_id' => [
				'type' => 'INT',
				'constraint'=> 5,
			],
			'category_id' => [
				'type' => 'INT',
				'constraint'=> 5,
			],
			'updated_at' => [
				'type' => 'DateTime',
				'constraint'=> 5,
			],
			'created_at' => [
				'type' => 'DateTime',
				'constraint'=> 5,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('questions');
	}

	public function down()
	{
		$this->forge->dropTable('questions');
	}
}
