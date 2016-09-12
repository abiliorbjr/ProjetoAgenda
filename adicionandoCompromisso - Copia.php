<?php 
	include_once'menu.inc';
	include_once'classes/conexao.class.php';
	$pdo = conectar();

	$titulo_compromisso=strtolower($_POST["titulo_compromisso"]);
	$hora_inicio_teste=$_POST["hora_inicio_teste"];
	$hora_final_teste=$_POST["hora_final_teste"];



	$validar= $pdo->prepare("SELECT * FROM compromissos WHERE titulo_compromisso=:titulo
	 AND  hora_inicio_teste=:hora_inicio AND hora_final_teste=:hora_final");

	
	$validar->bindValue(":titulo",$titulo_compromisso);
	$validar->bindValue(":hora_inicio",$hora_inicio_teste);
	$validar->bindValue(":hora_final",$hora_final_teste);



	$validar->execute();

	if ($validar->rowCount() == 0) {
		
$validar=$pdo->prepare("INSERT INTO compromissos(titulo_compromisso, hora_inicio_teste,hora_final_teste) VALUES (:titulo,:hora_inicio,:hora_final)");

		
    		$validar->bindValue(":titulo",$titulo_compromisso);
    		$validar->bindValue(":hora_inicio",$hora_inicio_teste);
    		$validar->bindValue(":hora_final",$hora_final_teste);

    		//executa cadastro

	$validar->execute();

	echo "Compromisso cadastrado com sucesso!!!!";
	}else{

		echo "Compromisso já existe neste horário por favor escolha outro horário !!!!";
	}

 ?>

	


