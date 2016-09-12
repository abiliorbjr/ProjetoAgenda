<?php 

	include_once'menu.inc';
	include("classes/conexao.class.php");
	$pdo=conectar();

	$nome = strtolower(trim($_POST["nome_usuario"])) ;//o trim aqui não serviu de nada
	$email = strtolower($_POST["email_usuario"]) ;
	$login = strtolower($_POST["login_usuario"]);
	$senha = sha1($_POST["senha_usuario"]);
	$telefone = $_POST["telefone_usuario"];

	
	
 
	

	//valida  o cadastro
	/*$validar=$pdo->prepare("SELECT * FROM usuarios WHERE nome_usuario=:nome AND email_usuario=:email AND login_usuario=:login AND senha_usuario=:senha AND telefone_usuario=:telefone");*/
	$validar=$pdo->prepare("SELECT * FROM usuarios WHERE nome_usuario=:nome AND email_usuario=:email AND login_usuario=:login");

	$validar->bindValue(":nome",$nome);
	$validar->bindValue(":email",$email);
	$validar->bindValue(":login",$login);
	//$validar->bindValue(":senha",$senha);
	//$validar->bindValue(":telefone",$telefone);

	$validar->execute();
	if($validar->rowCount() == 0):

		//prepara o cadastro
	$buscaSegura=$pdo->prepare("INSERT INTO usuarios(nome_usuario,email_usuario,login_usuario,senha_usuario,telefone_usuario) VALUES(:nome,:email,:login,:senha,:telefone)");
    $buscaSegura->bindValue(":nome",$nome);
	$buscaSegura->bindValue(":email",$email);
	$buscaSegura->bindValue(":login",$login);
	$buscaSegura->bindValue(":senha",$senha);
	$buscaSegura->bindValue(":telefone",$telefone);
		//executa cadastro

	$buscaSegura->execute();

	echo "Cadastrado com sucesso!!!!";

else:
	echo "Já existe!!!!";
endif;

 ?>