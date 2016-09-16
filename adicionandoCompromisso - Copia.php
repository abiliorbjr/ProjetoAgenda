<?php
function converterDataHoraBrazil2BancoMySQL($dataBrazil) {
        $dataConvertida = "";
        if(isset($dataBrazil) && $dataBrazil) {
            $arDataHora = explode(" ", $dataBrazil);
            $data = $arDataHora[0];
            $hora = $arDataHora[1];
            $array = explode("/", $data);
            $array = array_reverse($array);
            $str = implode($array, "/");
            $str .= ' ' . $hora;
            $dataConvertida = date("Y-m-d H:i:s", strtotime($str));
        }
        return $dataConvertida;
    }

	include_once'menu.inc';
	include_once'classes/conexao.class.php';
	$pdo = conectar();

	#$titulo_compromisso=strtolower($_POST["titulo_compromisso"]);
	$hora_inicio_teste=converterDataHoraBrazil2BancoMySQL($_POST["hora_inicio_teste"]);
	$hora_final_teste=converterDataHoraBrazil2BancoMySQL($_POST["hora_final_teste"]);

    $sql = "SELECT * from compromissos 
where hora_inicio_teste between :data_inicio AND :data_final
OR hora_final_teste between :data_inicio AND :data_final";


$validar= $pdo->prepare($sql);
	
	#$validar->bindValue(":titulo",$titulo_compromisso);
	$validar->bindValue(":hora_inicio",$hora_inicio_teste);
	$validar->bindValue(":hora_final",$hora_final_teste);


print_r($hora_inicio_teste);
echo "<br>";
print_r($hora_final_teste);

	$validar->execute();

#var_dump($validar);
die;
	if ($validar->rowCount() == 0) {
		
$validar=$pdo->prepare("INSERT INTO compromissos(titulo_compromisso, hora_inicio_teste,hora_final_teste) VALUES (:titulo,:hora_inicio,:hora_final)");

		
    		$validar->bindValue(":titulo",$titulo_compromisso);
    		$validar->bindValue(":hora_inicio",$hora_inicio_teste);
    		$validar->bindValue(":hora_final",$hora_final_teste);

    		//executa cadastro

	$validar->execute();

	/*echo "Compromisso cadastrado com sucesso!!!!";*/

	?>

	<div class="container">
				                <div class="row">
				                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
				                        <section class="col-md-12">
				                                <legend id="avisoEstarLogado">
				                                    <h1><?php echo "Compromisso cadastrado com sucesso!";?></h1>
				                                </legend>
				                        </section>
				                    </section>
								</div>
	</div>

	<?php

	}else{

		/*echo "Compromisso já existe neste horário por favor escolha outro horário!!!!";*/
		?>

	<div class="container">
				                <div class="row">
				                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
				                        <section class="col-md-12">
				                                <legend id="avisoEstarLogado">
				                                    <h1><?php echo "Compromisso já existe neste horário por favor escolha outro horário!";?></h1>
				                                </legend>
				                        </section>
				                    </section>
								</div>
	</div>

	<?php
	}

 ?>

	


