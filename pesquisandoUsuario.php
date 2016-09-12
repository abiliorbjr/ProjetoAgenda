<?php 
		session_start();
		include_once'menu.inc';
		include_once'classes/conexao.class.php';
		$pdo = conectar();

		$radio = $_POST['input_pesquisa'];


		$sql = "SELECT * FROM usuarios WHERE $radio";
                    $busca = $pdo->query($sql);
                    $linha = $busca->rowCount();


                    $result = $busca->fetch(PDO::FETCH_ASSOC));
                            
                     echo $result['id_usuario'];
                     echo $result['nome_usuario'];
                     echo $result['email_usuario'];

                ?>