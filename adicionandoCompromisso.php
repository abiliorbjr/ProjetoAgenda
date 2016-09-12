<?php 
	include_once'menu.inc';
	include_once'classes/conexao.class.php';
	$pdo = conectar();

	$titulo_compromisso=strtolower($_POST["titulo_compromisso"]);
	$data_inicio_compromisso=$_POST["data_inicio_compromisso"];
	$data_final_compromisso=$_POST["data_final_compromisso"];



	$validar= $pdo->prepare("SELECT * FROM compromissos WHERE titulo_compromisso=:titulo
	 AND  data_inicio_compromisso=:data_inicio AND data_final_compromisso=:data_final");

	
	$validar->bindValue(":titulo",$titulo_compromisso);
	$validar->bindValue(":data_inicio",$data_inicio_compromisso);
	$validar->bindValue(":data_final",$data_final_compromisso);



	$validar->execute();

	if ($validar->rowCount() == 0) {
		
$validar=$pdo->prepare("INSERT INTO compromissos(titulo_compromisso, data_inicio_compromisso,data_final_compromisso) VALUES (:titulo,:data_inicio,:data_final)");

		
    		$validar->bindValue(":titulo",$titulo_compromisso);
    		$validar->bindValue(":data_inicio",$data_inicio_compromisso);
    		$validar->bindValue(":data_final",$data_final_compromisso);

    		//executa cadastro

	$validar->execute();

	echo "Compromisso cadastrado com sucesso!!!!";
	}else{

		echo "Compromisso já existe neste horário por favor escolha outro horário !!!!";
	}

 ?>

	


