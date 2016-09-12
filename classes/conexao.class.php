<?php 
	function conectar(){
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=projeto_agenda","root","");
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $pdo;
	}

 ?>