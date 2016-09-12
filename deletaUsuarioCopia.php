<?php 
session_start();
include_once'menu.inc';



		if (isset($_SESSION['login'])) {
					
					include_once'classes/conexao.class.php';
					$pdo = conectar();
		

		?>

		<section> 

<div class="container">  
		<div class="row"> 

			<section class="col-md-6 col-xs-12 col-ms-12 col-md-offset-3">
								<section class="col-md-10">
										<legend>
											<h1>Deletando Usuário no Sistema</h1>
										</legend>

										<form method="post" action="deletandoUsuario.php">
											<div class="form-group">
												<label for="nome">Numedo do ID do usuário</label>
												<input type="text" id="nome" name="id_usuario" placeholder="Número do ID do usuário" class="  form-control" require autofocus>
											</div>

											
											<div class="form-group">
												<input type="submit" name="send" value="Deletar" class="btn btn-success pull-right">
											</div>

										</form>
										

								</section><!-- fim class col-md-10-->
			</section><!-- fim do class col-md-6 col-xs-12 col-ms-12 col-md-offset-3-->
		</div><!--fim class row-->
	</div><!--fim class panel-body-->

                    

            <hr>
                   
        
        
        
    </section><!-- fim section class="panel-body-->
<!--</section><!--fim do class panel panel-default hidepanelAba-->

<?php 
		include_once'rodape.php';
 ?>

 <?php

		}else{
			echo "Você precisa estar logado como administrador para deleter o usuário!!!!";
		}

?>







 