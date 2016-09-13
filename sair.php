<?php



/*session_start();*/

if (isset($_SESSION['login'])){

    



/*echo "Você realmente deseja sair da área restrita?<br />";
echo "<a href=\"index.php?pagina=logout\">Sim</a> | ";
echo "<a href=\"javascript:history.go(-1)\">Não</a>";*/

?>

<div class="container">
                <div class="row">
                    <section class="col-md-9 col-xs-12 col-ms-12 col-md-offset-2">
                        <section class="col-md-10">
                                <legend>
                                    <h1>Você realmente deseja sair da área restrita?</h1>
                                </legend>




                                    

                                        
    
                                     <form action="index.php?pagina=logout" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Logout" class="btn btn-success pull-right">
                                            
                                        </div>   
                        
                                    </form>

                            

                            <form action="javascript:history.go(-1)" method="post">

                                        <div class="form-group">

                                            <input type="submit" name="send" value="Voltar" class="btn btn-success pull-right">
                                            
                                        </div>   
                        
                                    </form>

                        </section>

                    </section>
                    </div>

                           


                    

                            

                          

</section>
</section>
</div>
</div>





                            


<?php


}else{

	echo "Você não está mais logado!!!!";

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

?>

