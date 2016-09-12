<?php
		include_once'classes/conexao.class.php'; 
		$pdo = conectar();
		session_start();
		if (isset($_SESSION['login'])) {
			 echo $_SESSION['login']['user']."</br>";
		}else{
			echo "Você precisa estar logar para agendar um compromisso"."</br>";
		}

		echo "string";
?>


	


<section class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-warning">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>LOGIN</th>
                    <th>DATA DE CADASTRO</th>
               
                </tr>
            </thead>

<tbody>
	
















    

                <!--<?php
                    /*$sql = "SELECT * FROM compromissos";
                    $busca = $pdo->query($sql);
                    $linha = $busca->rowCount();
                    
                    if($linha < 1){
                        echo"<tr>". "<td colspan='6' class='text-danger' >"."<strong>Não há compromissos cadastrados nessa data!</strong>" ."</td>"."</tr>";
                    }else{
                        while ($result = $busca->fetch(PDO::FETCH_ASSOC)){
                            
                         
                    
                ?>
                <tr>
                    <td><?php echo $result['titulo_compromisso'];?></td>
                    <td><?php echo $result['data_inicio_compromisso'];?></td>
                    <td><?php echo $result['data_final_compromisso'];?></td>
                    <td><?php echo $result['hora_inicial_compromisso'];?></td>
                    <td><?php echo $result['hora_final_compromisso'];?></td>
                    
                    
                    
                    
                </tr>-->
                
                
                
                <?php
                
                    }//FIM DO WHILE
                    }//FIM DO IF
                    
                ?>








                 </tbody>
        </table>
            
    </section>

    <!--<?php 
        }//else{
            //echo "Você precisa estar logado para acessar essa página!!!!";
        }
     ?>-->

     