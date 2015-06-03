<?php include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
$id=$_GET['id'];

      


$sql1 = "DELETE FROM usuarios where idusuario=$id";

$consulta=$mysqli->query($sql1);

if (!$$consulta) 
    {
    $consulta.="Error Eliminanda la sugerencia en la base de datos: " . mysqli_error();
    } 
    else 
        {
        $consulta.="el usuario con identificacion " . $id . " fue eliminado del sistema";
        }
        header("Location:usuarios.php");
        return $consulta;
