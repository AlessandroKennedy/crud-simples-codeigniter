<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlunoModel;
use CodeIgniter\Files\File;

class Aluno extends BaseController
{
	private $alunoModel;

	public function __construct()
	{
	
		$this->alunoModel = new AlunoModel();
	}

	public function index()
	{
		return view('alunos', [
			'alunos' => $this->alunoModel->paginate(10),
			'pager' => $this->alunoModel->pager
		]);
	}

	public function delete($id)
	{
		if ($this->alunoModel->delete($id)) {
			echo view('messages', [
				'message' => 'Usuário Excluído com Sucesso'
			]);
		} else {
			echo "Erro.";
		}
	}

	public function create()
	{
		return view('form');
	}

	public function store()
	{
	
		$validationRule = [
            'userfile' => [
                'label' => 'Foto',
                'rules' => 'uploaded[photo]'
                    . '|is_image[photo]'
                    . '|mime_in[photo,image/jpg,,image/jpeg]'
                    . '|max_size[photo,100]'
                    . '|max_dims[photo,1024,768]',
            ],
        ];
		if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('form', $data);
        }

        $img = $this->request->getFile('photo');

        if (! $img->hasMoved()) {
            $filepath = base_url() . '/uploads/' . $img->store();

            $data = ['pathFile' => new File($filepath)];
			
			$aluno = [
				'name'=> $this->request->getPost('name'),
				'address' => $this->request->getPost('address'),
				'photo' => $data['pathFile'],
				'id'=> $this->request->getPost('id')
			];
			if ($this->alunoModel->save($aluno)) {
				return view("messages", [
					'message' => 'Usuário salvo com sucesso'
				]);
			} else {
				echo "Ocorreu um erro.";
			}
        } else {
            $data = ['errors' => 'The file has already been moved.'];

            return view('form', $data);
        }
    
	

		
	}

	public function edit($id)
	{
		return view('form', [
			'aluno' => $this->alunoModel->find($id)
		]);
	}
}
