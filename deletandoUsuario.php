<?php 
	session_start();

		if (isset($_SESSION['login'])) {

			include_once('classes/conexao.class.php');
				$pdo = conectar();
				include_once'menu.inc';

				// nao deu certo$id_usu = $_GET["id_usuario"];

		//verifica se existem os dados necessarios para deletar
				if (!empty($_POST["id_usuario"])) {

						//recebendo dados
						$id=addslashes(trim($_POST["id_usuario"]));
						//realizando a consulta


						//$deletarUsuario=$pdo->prepare("DELETE FROM usuarios WHERE id_usuario=$id");

						$deletarUsuario=$pdo->prepare("DELETE FROM usuarios WHERE id_usuario=$id");
						$deletarUsuario->bindValue(1,$id);
						$deletarUsuario->execute();
							if ($deletarUsuario->rowCount()>0) {
								/*echo "USUARIO DELETADO COM SUCESSO!!!!";*/

								?>

						<div class="container">
                <div class="row">
                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
                        <section class="col-md-12">
                                <legend id="avisoDeletado">
                                    <h1><?php echo "Usuário deletado com sucesso!";?></h1>
                                </legend>
                                
                                <?php
					}

							}else{
									/*echo "<h2>NENHUM USUARIO DELETADO, FAVOR INFORMAR O ID CORRETO!!!!</h2>";*/

									?>

						<div class="container">
                <div class="row">
                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
                        <section class="col-md-12">
                                <legend id="avisoNenhumUsuario">
                                    <h1><?php echo "Nenhum usuário deletado, por favor informar o ID correto!";?></h1>
                                </legend>
                                
                                <?php

							}

							?>

								<section class="col-md-8 col-xs-8 col-ms-8 col-md-offset-1">
                        <section class="col-md-9">

                            <div class="container">        
    
                                     <form action="index.php?pagina=totalUsuariosCopia" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Voltar" class="btn btn-success pull-right">
                                            
                                        </div>   
                        
                                    </form>

                            </div>

                            </section>
                    </section>

                    <?php


				
			
				}else{

						echo "Você precisa estar logar como administrador para deletar um usuário";

						?>

						<div class="container">
                <div class="row">
                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
                        <section class="col-md-12">
                                <legend id="avisoEstarLogado">
                                    <h1><?php echo "Você precisa estar logar como administrador para deletar um usuário";?></h1>
                                </legend>
                                
                                <?php

							
						
					}



	
 ?>



		
