<?php
 session_start();
if ( isset($_SESSION['carrito']) || isset($_POST['nombre']))
{
   
    if(isset ($_SESSION['carrito'])){
		$compras=$_SESSION['carrito'];
		if(isset($_POST['nombre'])){
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];
                $categoria=$_POST['categoria'];
                 $cant_dis=$_POST["cantDisp"];
                 $idprod=$_POST['idprod'];
                 $idcat=$_POST['idcat'];
		$duplicado=-1;
			for($i=0;$i<=count($compras)-1;$i++){
				if($nombre==$compras[$i]['nombre']){
					$duplicado=$i;

				}
			}

if($duplicado != -1){
	$cantidad_nueva = $compras[$duplicado]['cantidad'] + $cantidad;
        if($cantidad_nueva<=$cant_dis)
        {
		$compras[$duplicado]=array("nombre"=>$nombre,"precio"=>$precio,"cantidad"=>$cantidad_nueva);
        }
          else
        {
              echo '<script language="javascript">alert("no existen sufusientes unidades disponibles" ); window.location="catalogo.php?id='.$idcat.'";</script>'; 
        }
}else {
     if($cantidad<=$cant_dis)
        {
		$compras[]=array("nombre"=>$nombre,"precio"=>$precio,"cantidad"=>$cantidad, "categoria"=>$categoria, "idprod"=>$idprod, "cantDisp"=>$cant_dis);
        }
         else
        {
               echo '<script language="javascript">alert("no existen sufusientes unidades disponibles" ); window.location="catalogo.php?id='.$idcat.'";</script>'; 
        }
}
				}
}
else
{
    
        $nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$cantidad=$_POST['cantidad'];
        $categoria=$_POST['categoria'];
        $cant_dis=$_POST["cantDisp"];
        $idprod=$_POST['idprod'];
        $idcat=$_POST['idcat'];
        if($cantidad<=$cant_dis)
        {
	$compras[]=array("nombre"=>$nombre,"precio"=>$precio,"cantidad"=>$cantidad,"categoria"=>$categoria, "idprod"=>$idprod, "cantDisp"=>$cant_dis);
        }
        else
        {
             echo '<script language="javascript">alert("no existen sufusientes unidades disponibles" ); window.location="catalogo.php?id='.$idcat.'";</script>'; 
             
        }
}
if(isset($_POST['cantidadactualizada'])){
	$id=$_POST['id'];
	$contador_cant=$_POST['cantidadactualizada'];
	if($contador_cant<1){
		$compras[$id]=NULL;
	}else{
            $cant_dis=$compras[$id]['cantDisp'];
             if($contador_cant<=$cant_dis)
             {
		$compras[$id]['cantidad']=$contador_cant;
             }
              else
        {
             echo '<script language="javascript">alert("no existen sufusientes unidades disponibles" ); window.location="carrito.php";</script>'; 
             
        }
		}
}
if(isset($_POST['id2'])){
	$id=$_POST['id2'];
	$compras[$id]=NULL;

}
$_SESSION['carrito']=$compras;
}


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="css/styleresumen.css" type="text/css" media="screen" />
        <meta charset="UTF-8">
        <title>Carrito de compras || MMK</title>
    </head>
    <?php include './header.php'; ?>
    <body>

    <table width="1000px"  height="90%"border="1" align="center" id="tablacarrito">
<tr align="center" style="background-color:#008fbe; color:#fff">
    <td width="27%">PRODUCTO</td>
    <td width="18%">PRECIO</td>
    <td width="37%">CANTIDAD</td>
    <td width="18%">TOTAL</td>
  </tr>
  <?php
  
  if(isset($_SESSION['carrito'])){
	  $total=0;

for($i=0;$i<=count($compras)-1;$i++){
	
	if($compras[$i]!=NULL){
	
  ?>
  <tr align="center">
    <td><?php echo $compras[$i]['nombre']; ?></td>
    <td><?php echo $compras[$i]['precio']; ?></td>
    <td>
      <form name="form1" method="post" action="">
      <input type="hidden" name="id" id="id" value="<?php echo $i;?>">
      <input type="text" name="cantidadactualizada" value="<?php echo $compras[$i]['cantidad'];?>"  size="2">
      <span id="toolTipBox" width="200"></span>
      <input type="image" name="actualizar" id="actualizar" src="img/actualizar.gif" onmouseover="toolTip('Presione para actualizar su pedido',this)">
      </form></td>
    <td>
	<form method="post" action=""><?php echo $compras[$i]['cantidad'] * $compras[$i]['precio'];?>
    <span id="toolTipBox" width="200"></span>
       <input name="id2" type="hidden" id="id2" value="<?php echo $i;?>"> 
       <input type="image" name="imageField" id="imageField" src="img/eliminar.gif" onmouseover="toolTip('Presione para eliminar su pedido',this)"></form></td>
  </tr>
  <?php
  $total= $total+($compras[$i]['cantidad'] * $compras[$i]['precio']);
}
  }
  }
  
  ?>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><p>&nbsp;</p>
      <p>TOTAL A PAGAR::</p></td>
    <td><p>&nbsp;</p>
    <p><?php if(isset($_SESSION['carrito'])){ echo "$ ".$total." Pesos ";}?></p>
    </td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td><form name="form2" method="post" action="resumenc_compra.php">
      <input type="submit" name="button" id="button" value="Enviar Pedido">
    </form></td>
  </tr>
    </table>
</div>
        </div>
   	</div>

   
   
</body>
<?php include './footer.php';?>
</html>
