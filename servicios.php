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
            
        <link rel="stylesheet" href="css/estiloServicios.css" type="text/css" media="screen" />
       
        <title></title>
    </head>
    <?php include './header.php';?>
    <body>
        <h1>Intalaciones y servicios</h1>
        <div id="propaganda">
            <img src="img/servicios/serv.PNG"/> 
        </div>
        <div id="propaganda2">
           
            <img src="img/servicios/serv2.PNG"/>
        </div>
        <div class="contenido">
            <div id="img1"> <img src="img/servicios/servicios.PNG"/> </div>
            <div id="img1"> <img src="img/servicios/servicios2.PNG"/> </div>
            <div id="img1"> <img src="img/servicios/servicios3.PNG"/> </div>
            <div id="img1"> <img src="img/servicios/servicios4.PNG"/> </div>
            <div id="img1"> <img src="img/servicios/servicios5.PNG"/> </div>
        </div>
    </body>
</html>