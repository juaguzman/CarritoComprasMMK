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
        <link rel="stylesheet" href="css/estiloContacto.css" type="text/css" media="screen" />
        <title>Contatenos</title>
    </head>
    <?php include './header.php';?>
    <body>
       
        <h1>Contatenos</h1>
        <div id="texto">
            <font face="Helvetica">
            <h2>ESCOGE EL MEDIO DE TU PREFERENCIA:</h2>
            <h2>Email:</h2>
            Escríbenos a contacto@minimarket.com
            <h2>Telefonos:</h2>
            Si tu pregunta es de carácter urgente, comunícate con nuestro equipo
            <br>
            de servicio al cliente por teléfono:
            <br>
            <br>
            Bogotá: 745-7888 / 487-2222
            <br>
            <br>
            <table class="tg">
  <tr>
    <th class="tg-i0og">Armenia:</th>
    <th class="tg-i0og">Barranquilla:</th>
    <th class="tg-i0og">Bucaramanga:</th>
  </tr>
  <tr>
    <td class="tg-walu">735-7306</td>
    <td class="tg-walu">385-3555</td>
    <td class="tg-walu">697-0303</td>
  </tr>
  <tr>
    <td class="tg-i0og">Buga:</td>
    <td class="tg-i0og">Cali:</td>
    <td class="tg-i0og">Cartagena:</td>
  </tr>
  <tr>
    <td class="tg-walu">238-4444.</td>
    <td class="tg-walu">485-1077</td>
    <td class="tg-walu">693-1322.</td>
  </tr>
  <tr>
    <td class="tg-i0og">Girardot:</td>
    <td class="tg-i0og">Ibague:</td>
    <td class="tg-i0og">Medellín:</td>
  </tr>
  <tr>
    <td class="tg-walu">888-9292.</td>
    <td class="tg-walu">277-0222.</td>
    <td class="tg-walu">604-3541.</td>
  </tr>
  <tr>
    <td class="tg-i0og">Neiva:</td>
    <td class="tg-i0og">Pasto:</td>
    <td class="tg-i0og">Popayan:</td>
  </tr>
  <tr>
    <td class="tg-walu">863-0202</td>
    <td class="tg-walu">737-4343</td>
    <td class="tg-walu">837-5858.</td>
  </tr>
  <tr>
    <td class="tg-i0og">Sincelejo:</td>
    <td class="tg-i0og">Valledupar:</td>
    <td class="tg-i0og">Zipaquira:</td>
  </tr>
  <tr>
    <td class="tg-walu">276-4555.</td>
    <td class="tg-walu">589-3939.</td>
    <td class="tg-walu">881-0808</td>
  </tr>
</table>
            <br>
            <br>
            <b>ÁREA DE VENTAS:</b>
            <br>
            Lunes - Sábado: De 7:00 a 22:00
            <br>
            Domingos/festivos: De 9:00 a 21:00
            <br>
            <br>
            <b>ÁREA DE SERVICIO AL CLIENTE:</b>
            <br>
            Lunes - Viernes: De 7:00 a 21:00
            <br>
            Sábado: De 7:00 a 17:00
            <br>
            Domingos/festivos: Cierre de linea
            <br>
            <br>
            </font>
        </div>
       
    </body>
    
</html>