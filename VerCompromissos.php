<?php
		include_once'classes/conexao.class.php'; 
		$pdo = conectar();
		
		if (isset($_SESSION['login'])) {

			 /*echo $_SESSION['login']['user']."</br>";*/

             ?>
             <div class="container">
                <div class="row">
                    <section class="col-md-12 col-xs-12 col-ms-12 ">
                        <section class="col-md-12">
                                <legend id="loginTopo">
                                    <h1><?php echo "Agenda do usuário:  " . $_SESSION['login']['login_usuario']."</br>";?></h1>
                                </legend>

             

             <div id="calendar"></div>

             <?php


                       

		}else{
			echo "Você precisa estar logar para ver os compromissos"."</br>";


            ?>
            
            <section class="col-md-8 col-xs-8 col-ms-8 col-md-offset-1">
                        <section class="col-md-9">

                            <div class="container">        
    
                                     <form action="index.php?pagina=login" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Login" class="btn btn-success pull-right">
                                            
                                        </div>   
                        
                                    </form>

                            </div>

                            </section>
                    </section> 

            


            

            

            
                              
                        

            <?php    
                                        
		}

		echo "string";
?>





	



	

                <!--<?php
                   /* $sql = "SELECT * FROM compromissos";
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
                    
                    
                    
                    
                </tr>
                
                
                
                <?php
                
                    }//FIM DO WHILE
                    }//FIM DO IF

                ?>*/








              

     