<?php 
	session_start();
	include_once'menu.inc';
	include_once'classes/conexao.class.php';
	$pdo = conectar();


		




	//verifica se existem os dados necessarioa para a atualização 
	if (!empty($_POST["id_usuario"]) && !empty($_POST["nome_usuario"]) && !empty($_POST["email_usuario"]) && !empty($_POST['login_usuario']) && !empty($_POST['senha_usuario']) && !empty($_POST['telefone_usuario']) && !empty($_POST['status_usuario']) && !empty($_POST['nivel_acesso'])) {
		
			//Recebendo dados

		$id=addslashes(trim($_POST["id_usuario"]));
		$nome=strtolower(addslashes(trim($_POST["nome_usuario"])));
		$email=strtolower(addslashes(trim($_POST["email_usuario"])));
		$login=strtolower(addslashes(trim($_POST["login_usuario"])));
		$senha=addslashes(trim($_POST["senha_usuario"]));
		$telefone=addslashes(trim($_POST["telefone_usuario"]));
		$status=addslashes(trim($_POST["status_usuario"]));
		$nivel=addslashes(trim($_POST["nivel_acesso"]));
		
		

		$atualizarUsuario=$pdo->prepare("UPDATE usuarios SET id_usuario=:id, nome_usuario=:nome, email_usuario=:email, login_usuario=:login, senha_usuario=:senha, telefone_usuario=:telefone, status_usuario=:status, nivel_acesso=:nivel WHERE id_usuario=:id");

		$atualizarUsuario->bindValue(":id",$id);
		$atualizarUsuario->bindValue(":nome",$nome);
		$atualizarUsuario->bindValue(":email",$email);
		$atualizarUsuario->bindValue(":login",$login);
		$atualizarUsuario->bindValue(":senha",$senha);
		$atualizarUsuario->bindValue(":telefone",$telefone);
		$atualizarUsuario->bindValue(":status",$status);
		$atualizarUsuario->bindValue(":nivel",$nivel);
		




		$atualizarUsuario->execute();
		if ($atualizarUsuario->rowCount() > 0) {
			# code...
			echo "USUARIO ATUALIZADO COM SUCESSO!!!!";
		}else{

			echo "DESCULPA O USUARIO NÃO FOI ALTERADO";
		}

	}else{
		echo"<h2>NENHUM USUARIO ENCONTRADO, FAVOR INFORMAR OS DADOS</h2>";
	}
	
 ?>

 