<?php

	require('Lib/autoload.php');

	use Controller\UsuarioController;
	use View\UsuarioView;

	$view = new UsuarioView();
	$controller = new UsuarioController();

	if(!empty($_POST['login']) && !empty($_POST['senha'])){
		$controller->logarUsuario($_POST);
		$view->carregarListagem();
	}else{
		header('Location: index.php');
	}