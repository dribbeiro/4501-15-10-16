<?php
	namespace Model;

	use Lib\Banco;
	use Entities\EntityCliente;

	class ClienteModel{

		private $banco;
		private $entidade;

		public function __construct(Banco $banco, EntityCliente $cliente){
			$this->banco = $banco;
			$this->entidade = $cliente;
		}

	}