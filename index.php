<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>

		<?php 
			include_once'menu.inc';
		 ?>
	
				<div>
					<?php 
						if(isset($_GET['pagina'])){
							if(file_exists($_GET['pagina'].".php")):
								include $_GET['pagina'].".php";
							else:
									echo "Erro 404 - Página não Existe procure o abilio";
								
							endif;
							
						}
					?>
				</div>
	</body>
</html>