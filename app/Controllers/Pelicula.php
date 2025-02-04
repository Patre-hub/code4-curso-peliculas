<?php

namespace App\Controllers;

use App\Models\PeliculasModel;

	class Pelicula extends BaseController{

		public function index(){
			$peliculaModel = new PeliculasModel();

			$datos['peliculas'] = $peliculaModel->findAll();						
			return view('pelicula/index',$datos);
		}

		public function show($id_pelicula){
			$peliculaModel = new PeliculasModel();

			$datos['pelicula'] = $peliculaModel->find($id_pelicula);			
			echo view('pelicula/show',$datos);
		}

		public function new(){
			echo view('pelicula/new',[
				'pelicula' => [
					'Peli_titulo' => '',
					'Peli_descripcion' => ''
				]
			]);
		}

		public function create(){
			$peliculaModel = new PeliculasModel();

			$datos = array(
				'Peli_titulo' => $this->request->getPost('titulo'), 
				'Peli_descripcion' => $this->request->getPost('descripcion')
			);
			
			$peliculaModel->insert($datos);
		}

		public function edit($id_pelicula){
			$peliculaModel = new PeliculasModel();

			$datos['pelicula'] = $peliculaModel->find($id_pelicula);						
			echo view('pelicula/edit',$datos);
		}

		public function update($id_pelicula){
			$peliculaModel = new PeliculasModel();

			$datos = array(
				'Peli_titulo' => $this->request->getPost('titulo'), 
				'Peli_descripcion' => $this->request->getPost('descripcion')
			);
			
			$peliculaModel->update($id_pelicula,[
				'Peli_titulo' => $this->request->getPost('titulo'), 
				'Peli_descripcion' => $this->request->getPost('descripcion')
			]);
			echo 'update';
		}

		public function delete($id_pelicula){			
			$peliculaModel = new PeliculasModel();
			$peliculaModel->delete($id_pelicula);
			echo 'delete';
		}


	}

?>