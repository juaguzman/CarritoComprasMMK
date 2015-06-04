<?php 
session_start();
 $id=$_GET['id'];
  $tot=$_GET['tot'];
if(isset($_SESSION['admins']))
{
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
  
       
        
$sql ="select listaobjetos.nombre as 'nombre', listaobjetos.cantidad as 'cantidad', listaobjetos.valorUnid as 'valorUnid', listaobjetos.valorTot as 'valorTot', listaobjetos.compras_idfactura as 'idfactura', listaobjetos.productos_idProducto as 'idProducto', categorias.nombreCat as 'nombreCat' from listaobjetos, categorias where listaobjetos.categorias_idCat = categorias.idCat and listaobjetos.compras_idfactura ='$id'";
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
    <td class="tg-qj4c">Categoria</td>
    <td class="tg-qj4c">Objeto</td>
    <td class="tg-qj4c">Cant</td>
    <td class="tg-qj4c">Valor unit</td>
    <td class="tg-qj4c" >Valor Total</td>
  </tr>
  <?php while($campos=mysqli_fetch_object($consulta)){?>
  <tr>
   <td class="tg-031e"><?php echo $campos->idfactura; ?></td>
   <td class="tg-031e"><?php echo $campos->nombreCat; ?></td>
   <td class="tg-031e"><?php echo $campos->nombre; ?></td>    
    <td class="tg-031e"><?php echo $campos->cantidad; ?></td>
    <td class="tg-031e"><?php echo $campos->valorUnid; ?></td>
     <td class="tg-031e"><?php echo $campos->valorTot; ?></td>
    
  </tr>
  <?php }?>
  <tr>
    
      <td colspan="5" class="tg-qj4c">Total compra</td>
    <td class="tg-qj4c" ><?php echo $tot; ?></td> 
  </tr>
</table
    </body>
     <br>
     <div id="foot"><?php include './footer.php';?></div>
</html>