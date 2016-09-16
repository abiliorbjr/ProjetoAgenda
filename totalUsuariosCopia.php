<?php 
    
    include_once'menu.inc';

    if (isset($_SESSION['login']) ) {
        include_once'classes/conexao.class.php';
        $pdo = conectar();

     ?>


<!--Código do painel do botao Adicionar Usuário-->
 <section class="panel panel-default hidepanelAba">
    <section class="panel-heading">
        <i class="glyphicon glyphicon-user"></i>
        CADASTRO DE USUÁRIOS
    </section>
    <section class="panel-body">
        
        <form action="cadastrando.php" method="post">   
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome_usuario" class="form-control" placeholder="Nome" autofocus>
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email_usuario" class="form-control" placeholder="E-mail">
                    </div>

                    <div class="row">
                               <div class="col-md-6">
                                    <label>Login</label>
                                    <input type="text" name="login_usuario" class="form-control" placeholder="Login">
                               </div> 

                              <div class="col-md-6">
                                    <label>Senha</label>
                                    <input type="password" name="senha_usuario" class="form-control" placeholder="Senha">
                              </div>

                              <div class="col-md-6">
                                                        <label for="telefon">Telefone</label>
                                                        <input type="telefone" id="telefone" name="telefone_usuario" placeholder="" class="form-control">
                              </div>

                    </div>

            <hr>
                    <div class="well">
                         <button class="btn btn-primary">Cadastrar Usuario</button>
                    </div>
        
        </form> 
        
    </section>
</section><!--Termino do Código do painel do botao Adicionar Usuário-->


<div class="row">
                    <section class="col-md-12 col-xs-12 col-ms-9  ">

<section class="panel panel-success">
    
                <section class="panel-heading">
                    <i class="glyphicon glyphicon-list"></i>
                        LISTA DE USUÁRIOS - Sistema Administrativo
                        <a href="index.php?pagina=deletaUsuarioCopia" class="btn btn-danger btn-xs pull-right btnadd">
                            <i class="glyphicon glyphicon-trash"></i>
                            Deletar Usuário
                        </a>

                    <!--<i class="glyphicon glyphicon-list"></i>icone-->
                        
                        <a href="#" class="btn btn-danger btn-xs pull-right btnadd">
                            <i class="glyphicon glyphicon-plus"></i>
                                Adicionar Usuário
                        </a>

                        
                        
                        <a href="index.php?pagina=pesquisarUsuario" class="btn btn-danger btn-xs pull-right btnadd">
                            <i class="glyphicon glyphicon-filter"></i>
                                Pesquisar Usuário
                        </a>

                        <a href="index.php?pagina=editarUsuario" class="btn btn-danger btn-xs pull-right btnadd">
                            <i class="glyphicon glyphicon-pencil"></i>
                                Alterar Usuário
                        </a>

            </section>




        
</section>  

</section>

</div>

   
        

    
    <section class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-warning">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>LOGIN</th>
                    <th>DATA DE CADASTRO</th>
                <!--<th colspan="1">ATIVO</th> faz dividir colunas dentro do ativo-->
                    <th>ATIVO</th>
                    <!--<th></th>
                    <th></th>-->
                </tr>
            </thead>
            
            <tbody>
                <?php
                    $sql = "SELECT * FROM usuarios";
                    $busca = $pdo->query($sql);
                    $linha = $busca->rowCount();
                    
                    if($linha < 1){
                        echo"<tr>". "<td colspan='6' class='text-danger' >"."<strong>Não há usuários cadastrados!</strong>" ."</td>"."</tr>";
                    }else{
                        while ($result = $busca->fetch(PDO::FETCH_ASSOC)){
                            
                         
                    
                ?>
                <tr>
                    <td><?php echo $result['id_usuario'];?></td>
                    <td><?php echo $result['nome_usuario'];?></td>
                    <td><?php echo $result['email_usuario'];?></td>
                    <td><?php echo $result['login_usuario'];?></td>
                    <td><?php echo $result['data_cadastro_usuario'];?></td>
                    <td><?php echo $result['status_usuario'];?></td>
                    
                    
                    
                </tr>
                
                
                
                <?php
                
                    }//FIM DO WHILE
                    }//FIM DO IF
                    ?>
                
            </tbody>
        </table>
            
    </section>

    <?php 
        }else{
            /*echo "Você precisa estar logado para acessar essa página!!!!";*/


            ?>

                        <div class="container">
                <div class="row">
                    <section class="col-md-11 col-xs-12 col-ms-12 col-md-offset-1 ">
                        <!--<section class="col-md-12">-->
                                <legend id="avisoLogado">
                                    <h1><?php echo "Você precisa estar logado(a) para acessar essa página!";?></h1>
                                </legend>

                                    <form action="index.php?pagina=login" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Login" class="btn btn-success pull-right">
                                            
                                        </div>   
                        
                                    </form>

                             <?php    
                                        
        
        }
     ?>