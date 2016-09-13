<?php 
	session_start();
	include_once'menu.inc';

	if (isset($_SESSION['login'])) {

		include_once'classes/conexao.class.php';

		
	}

 ?>


 <div class="container">  
				<div class="row">     
	
		
							<section class="col-md-6 col-xs-12 col-ms-12 col-md-offset-3">
								<section class="col-md-10">
										<legend>
											<h1>Pesquisando no Sistema</h1>
										</legend>
										<legend>Como você deseja realizar sua pesquisa? </legend>

			<form action="pesquisandoUsuario.php" method="post">
 <section>


	<div class="radio">
  <label>
    <input type="radio" name="radio_pesquisa" id="radio_id" value="option1" checked>
    Pelo ID do usuário. &mdash; 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="radio_pesquisa" id="radio_nome" value="option2">
    Pelo nome do usuário.
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="radio_pesquisa" id="radio_email" value="option3">
    Pelo email do usuário.
  </label>
</div>


<div class="row">
  <label>
    <input type="text" name="input_pesquisa" id="input_pesquisa" name="input_pesquisa" placeholder="Digite sua opcão">
    
  </label>
</div>


		<div class="form-group">
			<input type="submit" name="send" value="Adicionar" class="btn btn-success pull-right">
		</div>
				 	
				 	
				 </section>
				 </form>

				 <form action="index.php?pagina=totalUsuariosCopia" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Voltar" class="btn btn-success pull-right">
                                            
                                        </div> 
                                        </form>

