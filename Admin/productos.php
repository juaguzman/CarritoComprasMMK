<?php 
session_start();
if(isset($_SESSION['admins']))
{
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
$sql ="SELECT * FROM productos";
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
        <link rel="stylesheet" href="css/estiloProductos.css" type="text/css" media="screen" />
        <script src="sropys/script.js"></script>
        <title>Prodcutos</title>
    </head>
    <?php include 'header.php';?>
    <body>
        <h1>Productos</h1>
        <br>
        <br>
        <div id="prod">
        <table class="tg">
        <tr>
            <th class="tg-rvy5" colspan="10"><a href="agregarPoducto.php">Agregar producto </a></th>
        </tr>
        <tr>
            <td class="tg-1ttd">idProducto</td>
            <td class="tg-1ttd">Nombre</td>
            <td class="tg-1ttd">Descripcion</td>
            <td class="tg-1ttd">Cantidad</td>
            <td class="tg-1ttd">Precio de venta</td>
            <td class="tg-1ttd">foto</td>
            <td class="tg-1ttd">Precio de compra</td>
            <td class="tg-1ttd">Categoria</td>
            <td class="tg-1ttd" colspan="2">Acciones</td>
        </tr>
        <?php while($campos=mysqli_fetch_object($consulta)){?>
        <tr>
            <td class="tg-031e"><?php echo $campos->idProducto; ?></td>
            <td class="tg-031e"><?php echo $campos->nombre; ?></td>
            <td class="tg-031e"><?php echo $campos->descripcion; ?></td>
            <td class="tg-031e"><?php echo $campos->cantidad; ?></td>
            <td class="tg-031e"><?php echo $campos->presioVenta; ?></td>
            <td class="tg-031e"><?php echo $campos->foto; ?></td>
            <td class="tg-031e"><?php echo $campos->PresioCompra;?></td>
            <td class="tg-031e"><?php echo $campos->Categorias_idCat;?></td>
            <td class="tg-031e"><a class="ac"href="#"  
            onclick="modificarProducto(<?php echo $campos->idProducto; ?>)">
            <img src="../img/modificar.png" width="30px" height="30px"/></a></td>
            <td class="tg-031e"><a class="ac"href="#"  onclick="eliminarProducto(<?php echo $campos->idProducto; ?>)"><img src="../img/remove_event_256.png" width="30px" height="30px"/></a></td>
        </tr>
        <?php }?>
        
        
        </table>
            </div>
    </body>
</html>