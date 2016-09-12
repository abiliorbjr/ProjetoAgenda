<?php 
		session_start();

		if (isset($_SESSION['login'])) {
			echo $_SESSION['login']['user'];
		}else{
			echo "nao esta logado";
		}
		

 ?>

 <?php 
			include_once'rodape.php';
		 ?>
		