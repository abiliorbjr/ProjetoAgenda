<?php 
	
	include_once("classes/conexao.class.php");
	$pdo=conectar();
	include_once'menu.inc';
	

?>



			<div class="container">  
				<div class="row">     
	
		
							<section class="col-md-6 col-xs-12 col-ms-12 col-md-offset-3">
								<section class="col-md-10">
										<legend>
											<h1>Alterando Usuário no Sistema</h1>
										</legend>

										<form method="post" action="editandoUsuario.php">


                                             <div class="form-group">
												<label for="ID">Id do Usuário</label>
												<input type="text" id="id_usuario" name="id_usuario" placeholder="ID do usuário que deseja alterar" class="  form-control" require autofocus>
											</div>

											<div class="form-group">
												<label for="nome">Nome</label>
												<input type="text" id="nome" name="nome_usuario" placeholder="Nome" class="  form-control" require autofocus>
											</div>


											<div class="form-group">
												<label for="email">E-mail</label>
												<input type="email" id="email" name="email_usuario" placeholder="email@email.com" class="form-control">
											</div>

											<div class="form-group">
												<label for="login">Login</label>
												<input type="text" id="login" name="login_usuario" placeholder="Login" class="form-control">
											</div>

											<div class="form-group">
												<label for="senha">Senha</label>
												<input type="password" id="senha" name="senha_usuario" placeholder="senha" class="form-control">
											</div>

											<div class="form-group">
												<label for="telefon">Telefone</label>
												<input type="telefone" id="telefone" name="telefone_usuario" placeholder="" class="form-control">
											</div>

											<div class="form-group">
												<label for="status_usuario">Status Usuário</label>
												<input type="text" id="status_usuario" name="status_usuario" placeholder="Status A = ativo I = inativo" class="form-control">
											</div>

											<div class="form-group">
												<label for="nivel_acesso">Nivel de acesso</label>
												<input type="number" id="nivel_acesso" name="nivel_acesso" placeholder="nivel de acesso do usuário" class="form-control">
											</div>

											<div class="form-group">
												<input type="submit" name="send" value="Alterar" class="btn btn-success pull-right">
											</div>

										</form>
										

								</section>
							</section>
				</div>
			</div>
	
	<?php 
		include_once'rodape.php';
	 ?>


