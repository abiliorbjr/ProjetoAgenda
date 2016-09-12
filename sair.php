<?php



/*session_start();*/

if (isset($_SESSION['login'])){

echo "Você realmente deseja sair da área restrita?<br />";
echo "<a href=\"index.php?pagina=logout\">Sim</a> | ";
echo "<a href=\"javascript:history.go(-1)\">Não</a>";

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

