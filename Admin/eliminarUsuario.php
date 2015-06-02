<?php include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
$id=$_GET['id'];
$sql ="SELECT * FROM usuarios where idusuario=$id ";
$consulta= $mysqli->query($sql);
$campos=  mysqli_fetch_object($consulta);        


$sql = "DELETE fROM usuarios where idusuario=$id ";

$consulta=$mysqli->query($sql);

if (!$sql) 
    {
    $consulta.="Error Eliminanda la sugerencia en la base de datos: " . mysqli_error();
    } 
    else 
        {
        $consulta.="el usuario con identificacion " . $id . " fue eliminado del sistema";
        }
        header("Location:usuarios.php");
        return $consulta;
