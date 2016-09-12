<?php 
	function acessoLogado(){
		$logado = if (isset($_SESSION['login'])) {

					include_once'classes/conexao.class.php';
					$pdo = conectar();
			
		
	}

 ?>