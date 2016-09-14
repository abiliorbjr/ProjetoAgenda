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
	if($validar->rowCount() == 0){

		//prepara o cadastro
	$buscaSegura=$pdo->prepare("INSERT INTO usuarios(nome_usuario,email_usuario,login_usuario,senha_usuario,telefone_usuario) VALUES(:nome,:email,:login,:senha,:telefone)");
    $buscaSegura->bindValue(":nome",$nome);
	$buscaSegura->bindValue(":email",$email);
	$buscaSegura->bindValue(":login",$login);
	$buscaSegura->bindValue(":senha",$senha);
	$buscaSegura->bindValue(":telefone",$telefone);
		//executa cadastro

	$buscaSegura->execute();

	/*echo "cadastrado!!!";*/

	?>

						<div class="container">
                <div class="row">
                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
                        <section class="col-md-12">
                                <legend id="avisoLogado">
                                    <h1><?php echo "Cadastrado com sucesso!";?></h1>
                                </legend>
                                
                                <form action="index.php?pagina=login" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Login" class="btn btn-success pull-right">
                                            
                                        </div>   
                        
                                    </form>


                                <?php
					}



else{
	/*echo "Já existe!!!!";*/

	?>

	<div class="container">
                <div class="row">
                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
                        <section class="col-md-12">
                                <legend id="avisoLogado">
                                    <h1><?php echo "Usuário já existe!";?></h1>
                                </legend>
                                
                                
                                <form action="javascript:history.go(-1)" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Voltar" class="btn btn-success pull-right">
                                            
                                        </div>   
                        
                                    </form>

                                    <?php
}


 ?>