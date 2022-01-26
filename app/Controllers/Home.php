<?php

namespace App\Controllers;
use App\Models\AlunoModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->alunoModel = new AlunoModel();
	}

	public function index()
	{

		

		return view('home', [
			'quantidadeAlunos' => $this->alunoModel->paginate(10)
		]);
	}
}
