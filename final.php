<?php
session_start();

if (!isset($_SESSION["usuario"])){
    header("location:nuevo_usuario.php?nologin=false");
    
}
$_SESSION["usuario"];
if(isset($_SESSION['carrito'])){
	$compras=$_SESSION['carrito'];
   $total = $_POST['total'];
   $email=$_POST['email'];
   $direccion=$_POST['direccion'];
    $factura= rand(0,99999999999)."_".rand(0,99999999999); 

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
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/stylefinal.css" type="text/css" media="screen" />
        <title></title>
        
    </head>
    <?php include './header.php';?>
    <body>
        <table >
            <thead>
                <tr align="center" style="background-color:#008fbe; color:#fff">
                <td colspan="2">Nombre: <?php echo $_SESSION["usuario"] ?> </td>
                <td colspan="2"> Email: <?php echo $email ?>  </td> 
                </tr >
                 <tr align="center" style="background-color:#008fbe; color:#fff">
                     <td colspan="2">Direccion: <?php echo $direccion ?></td>
                     <td  colspan="2">Factura N°: <?php echo $factura ?> </td>
                </tr>
            </thead>
            <br>
            <br>
            <tbody>
                <br>
            <br> 
            <tr>  &nbsp;</tr>
            <tr>  &nbsp;</tr>
            <tr>  &nbsp;</tr>
            <tr>  &nbsp; </tr>
            <tr>  &nbsp; </tr>
            <tr>                                                                       </tr>
                <tr border="solid" align="center" style="background-color:#008fbe; color:#fff" >
                     <br>
            <br>
                    <td  >PRODUCTO</td>
                    <td  >CANTIDAD</td>
                    <td >VALOR</td>
                    <td >VALOR TOTAL</td>
                </tr>
                
               
 <?php
  if(isset($_SESSION['carrito'])){
	  

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
  <?php }}}?>
                </tr>
                 <tr border="solid" align="center" style="background-color:#008fbe; color:#fff">
                     <td> &nbsp;</td>
                     <td>&nbsp;</td>
                     <td align="center">TOTAL A PAGAR:</td>
                     <td> <?php if(isset($_SESSION['carrito'])){ echo "$ ".$total." Pesos ";}?></td>
                </tr>
            </tbody>
            
        </table>
        <div id="final">
            <form action="carrito.php" method="post" id="seguir">
                <input type="submit" name="button" id="button" value="Seguir comprando">
            </form>
            <form action="venta.php" method="post" id="enviar">
                <input type="submit" name="button" id="button" value="Enviar pedido">
                <input type="hidden" name="total" id="button" value="<?php echo $total?>">
                <input type="hidden" name="factu" id="button" value="<?php echo $factura?>">
                <input type="hidden" name="direc" id="button" value="<?php echo $direccion?>">
            </form>
        </div>
        
    </body>
</html>
