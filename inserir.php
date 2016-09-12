<?php 

	include("classe/conexao.class.php");
	$pdo=conectar();
	
	$email = $_GET["email"];
 
	//prepara o cadastro
	$buscaSegura=$pdo->prepare("INSERT INTO usuarios(email) VALUES(:email)");
    //$buscaSegura=bindValue(":nome",$nome);
	$buscaSegura->bindValue(":email",$email);

	//valida  o cadastro
	$validar=$pdo->prepare("SELECT * FROM usuarios WHERE email=?");
	$validar->execute(array($email));
	if($validar->rowCount() == 0):
		//executa cadastro

	$buscaSegura->execute();

else:
	echo "Já existe!!!!";
endif;

 ?>