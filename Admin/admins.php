<?php 
session_start();

include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
$sql ="SELECT * FROM admin";
$consulta=  mysql_query($sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estiloCategoria.css" type="text/css" media="screen" />
        <title>Administrador de categorias</title>
    </head>
    <?php include 'header.php';?>
    <body>
        <h1>ADMINISTRADORES</h1>
        <br>
        <br>
        <?php if(isset($_SESSION['admins']) && $_SESSION['admins']=='ROOT') { ?>
        <table class="tg">
  <tr>
    <th class="tg-n0zm" colspan="6">Agregar Categoria</th>
  </tr>
  <tr>
    <td class="tg-wy3v">Id admin</td>
    <td class="tg-wy3v">Nombre</td>
    <td class="tg-wy3v">Contraseña</td>
    <td class="tg-wy3v">Email</td>
    <td class="tg-wy3v" colspan="2">Acciones</td>
  </tr>
   <?php while($campos=mysql_fetch_object($consulta)){?>
  <tr>
    <td class="tg-031e"><?php echo $campos->idAdmin; ?></td>
    <td class="tg-031e"><?php echo $campos->nombreAdmi; ?></td>
    <td class="tg-031e"><?php echo $campos->contrasena; ?></td>
    <td class="tg-031e"><?php echo $campos->contrasena; ?></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="modificarCategoria(<?php echo $campos->idAdmin; ?>)"><img src="../img/modificar.png" width="30px" height="30px"/></a></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="eliminarCategoria(<?php echo $campos->idAdmin; ?>)"><img src="../img/remove_event_256.png" width="30px" height="30px"/></a></td>
  </tr>
  <?php }?>
</table>
        <?php } else {?>
        <h1>Solo el usuario ROOT tiene ingreso a esta pagina</h1>
         <img id="inde" src="../img/error403.png">
        <?php }?>
    </body>
     <div id="foot"><?php include './footer.php';?></div>
</html>