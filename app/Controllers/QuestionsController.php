<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Questions;

class QuestionsController extends BaseController
{
	public function index()
	{
		$model = new Questions();
		$data = $model->getQuestions();
		return $this->response->setJSON($data);
	}
}
