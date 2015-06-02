<?php 
session_start();
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
$sql ="SELECT * FROM usuarios";
$consulta= $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estiloUsuario.css" type="text/css" media="screen" />
        <script src="sropys/script.js"></script>
        <title>Administrador de Usuarios</title>
    </head>
    <?php include 'header.php';?>
    <body>
        <h1>Usuarios</h1>
        <br>
        <br>
        <table class="tg">
  <tr>
      <th class="tg-nmn5" colspan="6"><a href="agregarUsuario.php">Agregar Usuario</a></th>
  </tr>
  <tr>
    <td class="tg-qj4c">Id Usuario</td>
    <td class="tg-qj4c">Nombre Usuario</td>
    <td class="tg-qj4c">Contraseña</td>
    <td class="tg-qj4c">Email</td>
    <td class="tg-qj4c" colspan="2">Acciones</td>
  </tr>
  <?php while($campos=mysqli_fetch_object($consulta)){?>
  <tr>
    <td class="tg-031e"><?php echo $campos->idusuario; ?></td>
    <td class="tg-031e"><?php echo $campos->nombreUsu; ?></td>
    <td class="tg-031e"><?php echo $campos->contrasena; ?></td>
    <td class="tg-031e"><?php echo $campos->email; ?></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="modificarUsuario(<?php echo $campos->idusuario; ?>)">Modificar</a></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="eliminarUsuario(<?php echo $campos->idusuario; ?>)">Eliminar</a></td>
  </tr>
  <?php }?>
</table
    </body>
</html>