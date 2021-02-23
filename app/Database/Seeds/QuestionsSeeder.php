<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class QuestionsSeeder extends Seeder
{
	public function run()
	{
		$myTime = Time::today('America/Chicago', 'en_US');
		$data = [
			'name' => 'Differentiate between Real DOM and Virtual DOM?', 
			'priority_id' => 1, 
			'category_id' => 1, 
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		// Simple Queries
		// $this->db->query("INSERT INTO avquestions (name, priority_id, category_id, updated_at, created_at) VALUES(:name:, :priority_id:, :category_id:, :updated_at:, :created_at:)", $data);
		// Using Query Builder
		$this->db->table('avquestions')->insert($data);
	}
}
