
<div class="container">        
	
		
	<section class="col-md-6 col-xs-12 ol-ms-12 col-md-offset-3">
		<section class="col-md-10">
				<legend>
					<h1>Login Sistema</h1>
				</legend>

				<form method="post" action="logarSistema.php">
				
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" id="email" name="email" placeholder="email@email.com" class="form-control" autofocus>
					</div>

					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" id="senha" name="senha" placeholder="senha" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="send" value="Logar Sistema" class="btn btn-success pull-right">
					</div>

				</form>


		</section>
	<section class="col-md-6 col-xs-12 ol-ms-12 col-md-offset-3">
			<section class="col-md-10">
					<div class="row">
							<?php 
								include_once'rodape.php';
							 ?>
					</div>
			</section>
	</section>




