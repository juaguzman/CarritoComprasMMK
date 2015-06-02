<?php
session_start();

include './conexion.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
if (!isset($_SESSION["usuario"])){
    header("location:nuevo_usuario.php?nologin=false");
    
}
$_SESSION["usuario"];
if(isset($_SESSION['carrito'])){
    if(isset( $_SESSION['idusuario'])){
	$compras=$_SESSION['carrito'];
        $factura=$_POST['factu'];
        $total=$_POST['total'];
        $id= $_SESSION['idusuario'];
        $direccion=$_POST['direc'];
    }

}





$result=$mysqli->query("insert into compras(idfactura,fecha, valorTot, direccion, idusuario) values ('".$factura."', curdate(),".$total.", '".$direccion."',".$id.")");

if($result)
{
   
}
 else {
    echo 'no se pudo mijo ';    
}