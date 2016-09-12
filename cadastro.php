<?php 
	
	include("classes/conexao.class.php");
	$pdo=conectar();
	

?>



			<div class="container">  
				<div class="row">     
	
		
							<section class="col-md-6 col-xs-12 col-ms-12 col-md-offset-3">
								<section class="col-md-10">
										<legend>
											<h1>Registrando no Sistema</h1>
										</legend>

										<form method="post" action="cadastrando.php">
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
												<label for="telefone">Telefone</label>
												<input type="telefone" id="telefone" name="telefone_usuario" placeholder="" class="form-control">
											</div>

											<div class="form-group">
												<input type="submit" name="send" value="Cadastrar" class="btn btn-success pull-right">
											</div>

										</form>
										

								</section>
							</section>
				</div>
			</div>
	
	<?php 
		include_once'rodape.php';
	 ?>


