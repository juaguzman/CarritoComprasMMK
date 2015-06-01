<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("location:nuevo_usuario.php?nologin=false");
    
}
$_SESSION["usuario"];
if(isset($_SESSION['carrito'])){
	$compras=$_SESSION['carrito'];

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/styleresumen.css" type="text/css" media="screen" />
<title>Resumen de compra</title>


</head>
    <?php include './header.php';?>
<body>

<div id="total">


   	<div id="contenido">
        <div class="categorias">
 <br>
 <p align="center">Bienvenido: <?php echo $_SESSION["usuario"]; ?></p><br />
 <p align="center">Este es el resumen de su compra, verifique su pedido e ingrese sus datos</p>
   
      <br>
      <form method="post" action="final.php">
    <table width="90%"  height="90%"border="1" align="center" id="tablacarrito">
<tr align="center" style="background-color:#fff; color:#000">
  <td>&nbsp;</td>
  <td align="right">Nombre:</td>
  <td><label for="nombre"></label>
    <input type="text" name="nombre" id="nombre" size="50" value="<?php echo $_SESSION["usuario"]; ?>" required></td>
  <td>&nbsp;</td>
</tr>
<tr align="center" style="background-color:#fff; color:#000">
  <td height="39">&nbsp;</td>
  <td align="right">E-Mail:</td>
  <td><label for="email"></label>
    <input type="email"  name="email" id="email" size="50" required></td>
  <td>&nbsp;</td>
</tr>
<tr align="center" style="background-color:#008fbe; color:#fff">
    <td width="27%" height="28" >PRODUCTO</td>
    <td width="18%" >PRECIO</td>
    <td width="37%" >CANTIDAD</td>
    <td width="18%" >TOTAL</td>
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
    <td><?php echo $compras[$i]['cantidad'];?></td>
    <td>
	<?php echo $compras[$i]['cantidad'] * $compras[$i]['precio'];?>
    </td>
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
    <td><input type="submit" name="button" id="button" value="Enviar pedido"></td>
  </tr>
    </table>
    </form>
</div>
        </div>

    </div>
</body>
</html>
