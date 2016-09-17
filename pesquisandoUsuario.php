<?php 
		/*session_start();*/
		include_once'menu.inc';
		include_once'classes/conexao.class.php';
		$pdo = conectar();


        $campo = $_POST['pesquisa'];
		$radio = $_POST['pesquisa_usuario'];


        if($radio == "nome"){
            $sql = "SELECT * FROM usuarios where nome_usuario like '%$campo%' ";
        }elseif($radio == "id"){
            $sql = "SELECT * FROM usuarios where id_usuario like '%$campo%' ";
        }elseif ($radio == "email") {
            $sql = "SELECT * FROM usuarios where email_usuario like '%$campo%' ";
        }
       

		
                    $busca = $pdo->query($sql);
                    $linha = $busca->rowCount();


                   
                     while (  $result = $busca->fetch(PDO::FETCH_ASSOC)) {
                                
            ?>
                                                      <section class="panel-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="bg-warning">
                                                    <th>ID</th>
                                                    <th>NOME</th>
                                                    <th>E-MAIL</th>
                                                    <th>LOGIN</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr>
                                                    <td><?php echo $result['id_usuario'];?></td>
                                                    <td><?php echo $result['nome_usuario'];?></td>
                                                    <td><?php echo $result['email_usuario'];?></td>
                                                    <td><?php echo $result['login_usuario'];?></td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                            
                                    </section>
    <?php
                
                    }//FIM DO WHILE
                    
                    ?>



                
                
                
                