
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Projeto Agenda</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/estilo.css">
		<script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Custom CSS -->
    	<link href="css/simple-sidebar.css" rel="stylesheet">


    	<link rel='stylesheet' href='calendario/fullcalendar.css' />

<script src='calendario/lib/moment.min.js'></script>
<script src='calendario/fullcalendar.js'></script>


<script>
	

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2016-09-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				<?php 
					
					$pdo= new PDO('mysql:host=localhost;dbname=projeto_agenda','root','');
					/*include_once("classes/conexao.class.php");
					$pdo = conectar();*/
					$sql = "SELECT * FROM compromissos";
                    $busca = $pdo->query($sql);
                    $linha = $busca->rowCount();
				while($r = $busca->fetch(PDO::FETCH_ASSOC)){ ?>
				{
					title: "<?= $r['titulo_compromisso']; ?>",
					/*start: "<?= $r['data_inicio_compromisso']; ?>",*/
					start: "<?= $r['hora_inicio_teste']; ?>",
					/*end: "<?= $r['data_final_compromisso']; ?>"*/
					end: "<?= $r['hora_final_teste']; ?>"

				},
				<?php }?>
				
			]
		});
		
	});



</script>

	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="row">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Meuu Site</a>
								</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>


						
						<li class="dropdownAgenda">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Agenda <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?pagina=adicionarCompromisso">Adicionar compromisso</a></li>
								<li class="divider"></li>
								<li><a href="index.php?pagina=VerCompromissos">Ver compromissos</a></li>
								<li class="divider"></li>
								<li><a href="#">Excluir compromissos</a></li>
							</ul>
						</li>
						
						<li><a href="#">Contato</a></li>
						<li><a href="index.php?pagina=cadastro">Registra-se</a></li>
						<li><a href="index.php?pagina=login">Login</a></li>
						<li><a href="index.php?pagina=sair">Logout</a></li>
						

						<li class="dropdownAdministrador">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrador <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?pagina=totalUsuariosCopia">Gerenciar Usuários</a></li>
								<li class="divider"></li>
								<li><a href="index.php?pagina=VerCompromissos">Gerenciar Agenda</a></li>
								
							</ul>
						</li>



					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Pesquisar">
						</div>
						<button type="submit" class="btn btn-default">Pesquisar</button>
					</form>
				</div>
				</div>
				</div>
				</nav>

				


				<!-- abaixo e o codigo da pagina total usuarios-->

			<script>
				$(document).ready(function(){
        $('.hidepanelAba').hide();//sumiu o painel cinza
        $(document).on('click','.btnadd',function(){
            $('.hidepanelAba').slideToggle('slow');//faz  o painel cinza aparecer
        });
    });
			</script>

			<script>
				$(document).ready(function(){
        $('.hidepaneldeleta').hide();//sumiu o painel cinza
        $(document).on('click','.btnadd',function(){
            $('.hidepaneldeleta').slideToggle('slow');//faz  o painel cinza aparecer
        });
    });
			</script>

    </body>
    </html>
