<?php
	namespace Model;

	use Entity\UsuarioEntity;
	use Lib\Db;
	use PDO;
	class UsuarioModel{

		private $db;

		public function __construct(Db $db){
			$pdo = new Db();
			$this->db = $pdo->getConn();
		}

		public function buscarUsuario(UsuarioEntity $usuario){

			$query = 'SELECT login FROM usuarios 
							   WHERE login = :login
							   AND senha = :senha';

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':login',$usuario->getLogin());
			$stmt->bindValue(':senha',$usuario->getSenha());

			$stmt->execute();

			if($stmt->rowCount()){
				$logado = $stmt->fetch(PDO::FETCH_OBJ);
				print_r($logado);
				return $logado;
			}else{
				echo 'Usuario ou senha invalido';
			}

		}

	}