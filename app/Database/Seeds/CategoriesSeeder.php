<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CategoriesSeeder extends Seeder
{
	public function run()
	{
		$myTime = Time::today('America/Chicago', 'en_US');
		$data = [
			'name' => 'React.JS', 
			'description' => "React.JS Entity",
			'sequence' => 2,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('categories')->insert($data);
		$data = [
			'name' => 'Redux', 
			'description' => "Redux Entity",
			'sequence' => 2,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('categories')->insert($data);
		$data = [
			'name' => 'Mobx', 
			'description' => "Mobx Entity",
			'sequence' => 2,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('categories')->insert($data);

		$data = [
			'name' => 'JavaScript', 
			'description' => "JavaScript Entity", 
			'sequence' => 1,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('categories')->insert($data);
		$data = [
			'name' => 'CSS3', 
			'description' => "CSS3 Entity", 
			'sequence' => 3,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('categories')->insert($data);
		$data = [
			'name' => 'HTML5', 
			'description' => "HTML5 Entity", 
			'sequence' => 3,
			'updated_at' => $myTime, 
			'created_at' => $myTime, 
		];
		$this->db->table('categories')->insert($data);
	}
}
