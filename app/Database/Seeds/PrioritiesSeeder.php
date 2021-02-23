<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PrioritiesSeeder extends Seeder
{
	public function run()
	{
		$myTime = Time::today('America/Chicago', 'en_US');
		$data = [
			'name' => 'High', 
			'description' => "High Entity",
			'sequence' => 1,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('priorities')->insert($data);
		$data = [
			'name' => 'Medium', 
			'description' => "Medium Entity",
			'sequence' => 2,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('priorities')->insert($data);
		$data = [
			'name' => 'Low', 
			'description' => "Low Entity",
			'sequence' => 3,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('priorities')->insert($data);

		$data = [
			'name' => 'Extra', 
			'description' => "Extra Entity", 
			'sequence' => 4,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('priorities')->insert($data);
		
	}
}
