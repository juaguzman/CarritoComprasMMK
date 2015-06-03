<?php 
session_start();
 $id=$_GET['id'];
if(isset($_SESSION['admins']))
{
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
  
       
        
$sql ="SELECT * FROM compras where idusuario=".$id;
$consulta= $mysqli->query($sql);
}
else 
 {
    echo "<script>
                alert('usuario invalido');
                location.href='index.php';
                </script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estiloUsuario.css" type="text/css" media="screen" />
        <script src="sropys/script.js"></script>
        <title>Administrador de Usuarios del Usuario</title>
    </head>
    <?php include 'header.php';?>
    <body>
        <h1>Lista de compras</h1>
        <br>
        <br>
        <table class="tg">
  
  <tr>
    <td class="tg-qj4c">Factura n°</td>
    <td class="tg-qj4c">Fecha</td>
    <td class="tg-qj4c">Valor total</td>
    <td class="tg-qj4c">Direccion</td>
    <td class="tg-qj4c" colspan="3">Acciones</td>
  </tr>
  <?php while($campos=mysqli_fetch_object($consulta)){?>
  <tr>
    <td class="tg-031e"><?php echo $campos->idfactura; ?></td>
    <td class="tg-031e"><?php echo $campos->fecha; ?></td>
    <td class="tg-031e"><?php echo $campos->valorTot; ?></td>
    <td class="tg-031e"><?php echo $campos->direccion; ?></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="modificarUsuario(<?php echo $campos->idusuario; ?>)"><img src="../img/modificar.png" width="30px" height="30px"/></a></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="eliminarUsuario(<?php echo $campos->idusuario; ?>)"><img src="../img/remove_event_256.png" width="30px" height="30px"/></a></td>
    <td class="tg-031e"><a class="ac"href="compras.php?id=<?php echo $campos->idusuario; ?>"><img src="../img/iconoCarroCompras.png" width="30px" height="30px"/></a></td>
  </tr>
  <?php }?>
</table
    </body>
</html>