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
   
    if(isset($_SESSION['carrito'])){
	  $total=0;

for($i=0;$i<=count($compras)-1;$i++){
	
	if($compras[$i]!=NULL){
	
//  
                
            $nombre=$compras[$i]['nombre'];
            $cantidad=$compras[$i]['cantidad'];
            $valorUn=$compras[$i]['precio'];
            $valorTot=$valorUn*$cantidad;
            $factura;
            $categoria=$compras[$i]['categoria'];
            $idprod=$compras[$i]['idprod'];
     $result1=$mysqli->query("insert into listaobjetos(nombre, cantidad, valorUnid, valorTot, compras_idfactura, categorias_idCat, productos_idProducto) values('".$nombre."',".$cantidad.",".$valorUn.",".$valorTot.",'".$factura."',".$categoria.",".$idprod.")");
     $result2=$mysqli->query("update productos set cantidad=cantidad-".$cantidad." where idProducto=".$idprod);
       
                                }
                                  }
                                   if($result)
                    {
           echo "<script>
                alert('Gracias por su compra');
                location.href='index.php';
                </script>";
                    }
                                  }
  
 
}
 else {
    echo 'no se pudo mijo ';    
}