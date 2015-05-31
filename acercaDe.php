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
        <link rel="stylesheet" href="css/estiloAcerca.css" type="text/css" media="screen" />
        <title>Acerca de Nosotros</title>
    </head>
    <?php include './header.php';?>
    <body>
        <h1>Acerca de nosotros</h1>
        <div id="texto">
            <font face="Comic Sans MS">
        <br>
        ¡Bienvenido a MINI MARKET! tu principal portal de internet para compras
        <br>
        de electrodomésticos, productos de tecnología y entretenimiento. Ofrecemos 
        <br>
        la más amplia selección y variedad a los mejores precios en la puerta de tu
        <br>
        casa.
        <br>
        <br>
        MINI MARKET es una tienda online de fácil y rápido acceso, está diseñada 
        <br>
        para hacer de tu compra la mejor experiencia.
        <br>
        <br>
        Visítanos con frecuencia para que no te pierdas las diferentes ofertas y los 
        <br>
        nuevos productos que estamos continuamente lanzando.
        <br>
        <br>
        Síguenos en FACEBOOK y TWITTER para que te enteres de las últimas  
        <br>
        tendencias, ofertas y noticias de nuestro portal.
        <br>
        <br>
        ¡Únete a nosotros en esta experiencia inigualable!
        <br>
        <br>
        MINI MARKET COLOMBIA S.A.S
        <br>
        NIT 900.499.362-8
        <br>
        DIRECCIÓN: CARRERA 12 NO. 13 -67 - 
        <br>
        TELÉFONO: 4858002
        <br>
        <br>
        </font>
        </div>
    </body>
    
</html>