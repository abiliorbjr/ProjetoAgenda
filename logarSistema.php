<?php 
	
	session_start();

	include_once'classes/conexao.class.php';
	$pdo = conectar();
	
	$email= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$senha = sha1($_POST['senha']);
	

	
	$sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' and senha_usuario = '$senha' and status_usuario = 'A' ";

	$bs = $pdo->query($sql);// entra no banco executa a query SELECT * FROM usuarios WHERE email_usuario = '$email' and senha_usuario = 'senha'
	$linha = $bs->rowCount();

	if($linha>0){

		$usuario = $bs->fetch(PDO::FETCH_ASSOC);
		$_SESSION['login']['user'] = $usuario['nome_usuario'];
		$_SESSION['login']['email'] = $usuario['email_usuario'];
		$_SESSION['login']['senha'] = $usuario['senha_usuario'];
		$_SESSION['login']['login_usuario'] = $usuario['login_usuario'];


		/*header("Location:teste.php?pagina=logaSistemaTeste");*/
		header("Location:teste.php");
	}else{
		header("Location:naoEstaLogado.php?pagina=login&erro=login");
	}
