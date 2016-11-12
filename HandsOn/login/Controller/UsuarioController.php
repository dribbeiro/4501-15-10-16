<?php
	namespace Controller;

	use Entity\UsuarioEntity;
	use Model\UsuarioModel;
	class UsuarioController{

		private $model;
		private $entidade;

		public function __construct(UsuarioModel $model, UsuarioEntity $usuario){
			$this->model = $model;
			$this->entidade = $usuario;
		}

		public function logarUsuario(Array $dados){

			$this->entidade->setLogin($dados['login']);
			$this->entidade->setSenha($dados['senha']);
			
			$this->model->buscarUsuario($this->entidade);
		}

	}