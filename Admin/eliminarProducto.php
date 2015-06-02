<?php include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
$id=$_GET['id'];
$sql ="SELECT * FROM productos where idProducto=$id ";
$consulta= $mysqli->query($sql);
$campos=  mysqli_fetch_object($consulta);        

$fotoN = $campos->imgProductos;
$ruta = "../imgProductos/";

unlink($ruta.$fotoN);


$sql = "DELETE from productos WHERE idProducto=$id";

$consulta=  @mysqli_query($sql);

if (!$sql) 
    {
    $consulta.="Error Eliminanda la sugerencia en la base de datos: " . mysqli_error();
    } 
    else 
        {
        $consulta.="la sugerencia con identificacion " . $id . " fue eliminado del sistema";
        }
        header("Location:productos.php");
        return $consulta;
?>


<img src="../imgProductos//"
