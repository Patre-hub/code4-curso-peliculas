<?php

namespace App\Controllers;

use App\Models\CategoriasModel;

	class Categoria extends BaseController{

		public function index(){
			$categoriaModel = new CategoriasModel();

			$datos['categorias'] = $categoriaModel->findAll();						
			return view('categoria/index',$datos);
		}

		public function show($id_categoria){
			$categoriaModel = new CategoriasModel();

			$datos['categoria'] = $categoriaModel->find($id_categoria);			
			echo view('categoria/show',$datos);
		}

		public function new(){
			echo view('categoria/new',[
				'categoria' => [
					'Catego_titulo' => ''
				]
			]);
		}

		public function create(){
			$categoriaModel = new CategoriasModel();

			$datos = array(
				'Catego_titulo' => $this->request->getPost('titulo')
			);
			
			$categoriaModel->insert($datos);
		}

		public function edit($id_categoria){
			$categoriaModel = new CategoriasModel();

			$datos['categoria'] = $categoriaModel->find($id_categoria);						
			echo view('categoria/edit',$datos);
		}

		public function update($id_categoria){
			$categoriaModel = new CategoriasModel();

			$datos = array(
				'Catego_titulo' => $this->request->getPost('titulo')
			);
			
			$categoriaModel->update($id_categoria,[
				'Catego_titulo' => $this->request->getPost('titulo')
			]);
			echo 'update';
		}

		public function delete($id_categoria){			
			$categoriaModel = new CategoriasModel();
			$categoriaModel->delete($id_categoria);
			echo 'delete';
		}
	}

?>