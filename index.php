<?php 
session_start();
include 'conexion.php';
include 'conex.php';
        $mysql = new conexioni();
        $mysqli=$mysql->conctar();
?>
<!DOCTYPE html>
<html>
    <head>
            
        <link rel="stylesheet" href="css/estiloInicio.css" type="text/css" media="screen" />
       
        <title></title>
    </head>
    <?php include './header.php';?>
    <body>
        <div id="contenedor">
         <div id="central" >
        <div id="izq">
            <img src="img/3.jpg"  />           
        </div> 
        <div id="der">
            <img src="img/catalago-de-ofertas-marzo.jpg"/>           
        </div> 
        <div id="der1">
            <img src="img/5.jpg"  />           
        </div> 
        <div id="der1">
            <img src="img/secundario-alkosto-dunlop.jpg"  />           
        </div>      
        </div>
        <div class="pro" >
        <div id="izqp">
            <img src="img/0.jpg"/>           
        </div>
        <div id="derp">
            <img src="img/samsung-ak-32j4300a.jpg"/>           
        </div>
        </div>
            </div>
    </body>
        
        
</html>

