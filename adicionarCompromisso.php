<?php 

	include_once'menu.inc';
	
	//session_start();
		if (isset($_SESSION['login'])) {
			//echo $_SESSION['login']['user']."</br>";
			//echo $_SESSION['login']['email']."</br>";
			//echo $_SESSION['login']['senha']."</br>";
			/*echo "Adicionando Compromissos do usuário:  " . $_SESSION['login']['login_usuario']."</br>"; /*quero colocar o login do usuario*/

			?>

			<div class="container">
				<div class="row">
					<section class="col-md-12 col-xs-12 col-ms-12 ">
						<section class="col-md-12">
								<legend>
									<h1><?php echo "Usuário:  " . $_SESSION['login']['login_usuario']."</br>";?></h1>
								</legend>


			

			<div class="container">
				<div class="row">
					<section class="col-md-6 col-xs-12 col-ms-12 col-md-offset-3">
						<section class="col-md-10">
								<legend>
									<h1>Adicionando compromissos</h1>
								</legend>

							<form action="adicionandoCompromisso - Copia.php" method="post">

									<div class="form-group">
										<label for="titulo_compromisso">Compromisso:</label>
										<input type="text" id="titulo_compromisso" name="titulo_compromisso" placeholder="digite seu compromisso aqui" require autofocus>
										
									</div>

									<!--<div class="form-group">
										<div id="datetimepicker2" class="input-append">
												<label for="hora_inicio_teste">Data inicio do Compromisso:</label>
												<input type="date" id="hora_inicio_teste" name="hora_inicio_teste" placeholder="Ex: 2016/12/01 23:30"require>
										
										</div>
									</div>-->

									




									


									<!--<div class="well">
										  <div id="datetimepicker2" class="input-append">
										    <input data-format="yyyy-MM-dd HH:mm:ss PP" type="text"></input>
										    <span class="add-on">
										      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
										      </i>
										    </span>
										  </div>
										</div>-->


										<!--<script type="text/javascript">
												  $(function() {
												    $('#datetimepicker2').datetimepicker({
												      language: 'en',
												      pick12HourFormat: true
												    });
												  });
										</script>-->

										<div class="form-group">
										<label for="hora_inicio_teste">Data final do Compromisso:</label>
										<input type="text" size="52"id="hora_inicio_teste" name="hora_inicio_teste" placeholder="Ex:ano(4 dig) mês(2 dig) dia (2 dig) hora(2 dig) min(2 dig) seg(2 dig) tudo junto"require>
										
									</div>

										


									<div class="form-group">
										<label for="hora_final_teste">Data final do Compromisso:</label>
										<input type="text" size="52" id="hora_final_teste" name="hora_final_teste" placeholder="Ex:ano(4 dig) mês(2 dig) dia (2 dig) hora(2 dig) min(2 dig) seg(2 dig) tudo junto"require>
										
									</div>

									

									<div class="form-group">
												<input type="submit" name="send" value="Adicionar" class="btn btn-success pull-right">
											</div>

								

							</form>
							
						</section>
						
					</section>
					
				</div>
				
			</div>


			<?php
			$numero = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
echo "Houve {$numero} dias em Agosto de 2016";

				?>

				

				
 					
					

					

<?php

	}else{
		echo "Você precisa estar logar para agendar um compromisso";
	}

 ?>

 <!--<div id="calendar"></div>-->