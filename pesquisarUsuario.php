<?php 
	include_once'menu.inc';



	if (isset($_SESSION['login'])) {

		echo "Bem vindo: ". $_SESSION['login']['login_usuario']."</br>";
		
	}

 ?>


 <div class="container">
				<div class="row">
					<section class="col-md-6 col-xs-12 col-ms-12 col-md-offset-3">
						<section class="col-md-10">
								<legend>
									<h1>Pesquinsando Usuários</h1>
								</legend>

							<form action="index.php?pagina=pesquisandoUsuario" method="post">

							<label for="">Escolha como você vai pesquisar: </label>

									<div class="form-group">

										<label for="id_usuario">Id:</label>
										<input type="radio" id="id_usuario" name="pesquisa_usuario" value="id" require>

										<label for="email_usuario">Email:</label>
										<input type="radio" id="email_usuario" name="pesquisa_usuario" value="email" require>

										<label for="nome_usuario">Nome:</label>
										<input type="radio" id="nome_usuario" name="pesquisa_usuario" value="nome" require >

										<div class="form-group">
										<label for="compromisso">Digite sua pesquisa:</label>
										<input type="text" id="pesquisa" name="pesquisa" placeholder="digite sua pesquisa aqui" require >
										
									</div>


									<div class="form-group">
											<input type="submit" name="send" value="Pesquisar" class="btn btn-success pull-right">
									</div>

							</form>

							<form action="index.php?pagina=totalUsuariosCopia" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Voltar" class="btn btn-success pull-right">
                                            
                                        </div> 
                                        </form>
						</section>
					</section>
				</div>
	</div>
