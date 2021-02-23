<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Categories;
use App\Models\Priorities;

class MetadataController extends BaseController
{
	public function index()
	{
		$categoriesModel = new Categories();
		$prioritiesModel = new Priorities();
		$data = [
			"categories"=> $categoriesModel->getCategories(),
			"priorities"=> $prioritiesModel->getPriorities()
		];
		return $this->response->setJSON($data);
	}
}
