<?php 
session_start();
include 'conexion.php';
include 'conex.php';
        $mysql = new conexion();
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
        <div id="izqp1">
            <img src="img/nevera.PNG"/>           
        </div>
        <div id="derp1">
            <img src="img/celular.PNG"/>           
        </div>
            <div id="izqp2">
                <img src="img/lav.jpg"/>           
        </div>
        <div id="derp2">
            <img src="img/sop.jpg"/>           
        </div>
        </div>
            <div id="fin">
                <img src="img/envios.PNG"/>
            </div>
        </div>
    </body>
        
        
</html>

