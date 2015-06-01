<?php 
session_start();
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
$sql ="SELECT * FROM categorias";
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
        <h1>Categorias</h1>
        <br>
        <br>
        <table class="tg">
  <tr>
    <th class="tg-n0zm" colspan="4">Agregar Categoria</th>
  </tr>
  <tr>
    <td class="tg-wy3v">Id Categoria</td>
    <td class="tg-wy3v">Nombre</td>
    <td class="tg-wy3v" colspan="2">Acciones</td>
  </tr>
   <?php while($campos=mysql_fetch_object($consulta)){?>
  <tr>
    <td class="tg-031e"><?php echo $campos->idCat; ?></td>
    <td class="tg-031e"><?php echo $campos->nombreCat; ?></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
  </tr>
  <?php }?>
</table>
    </body>
</html>