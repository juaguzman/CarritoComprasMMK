<?php
        include './conexion.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
      
        
if( isset($_GET['id']))
{
    $id = $_GET['id'];
    $consulta= $mysqli->query("SELECT * FROM productos where idProducto=".$id);
    $idc=$_GET['idc'];
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
        <title></title>
        <link rel="stylesheet" href="css/styleDesc.css" type="text/css" media="screen" />
    </head>
     <?php include './header.php';?>
    <body>
        <?php
        // put your code here
        ?> <h1>Producto</h1>
        <br>
        <br>
        <div id="prod">
        <table class="tbl">
            <tbody>
        <?php while($campos=mysqli_fetch_object($consulta)){?>
            
                <tr> <td colspan="2" class="tit"> <?php echo $campos->nombre; ?></td> </tr>
                <tr> <td colspan="2"> <img src="imgProductos/<?php echo $campos->foto;?>" width="600px" height="500px"> </td></tr>
         <tr><td class="nom">Descripcion: </td> <td class="info"><?php echo $campos->descripcion; ?></td></tr>
         <tr><td class="nom">Cantidad disponible: </td> <td class="info"><?php echo $campos->cantidad; ?></td></tr>
         <tr><td class="nom">precio: </td> <td class="info"><?php echo $campos->presioVenta; ?></td></tr>
         
         <form name="form1" method="post" action="carrito.php">
             <tr>  <td colspan="2" class="info"><input text-align="center"  name="cantidad" type="number" id="cantidad" value="1" height="50px"></td> </tr>
             <tr><td colspan="2" class="info"> <input type="image" name="imageField" id="imageField" src="img/comprar.gif">
              <input name="nombre" type="hidden" id="nombre" value="<?php echo $campos->nombre; ?>">
              <input name="precio" type="hidden" id="precio" value="<?php echo $campos->presioVenta; ?>">
              <input name="categoria" type="hidden" id="precio" value="<?php echo $campos->Categorias_idCat; ?>">
              <input name="cantDisp" type="hidden" id="precio" value="<?php echo $campos->cantidad; ?>">
              <input name="idprod" type="hidden" id="precio" value="<?php echo $campos->idProducto; ?>">
              <input name="idcat" type="hidden" id="precio" value="<?php echo $idc; ?>">
            </form> </tr>
            <tr><td colspan="2" class="info"><a href="catalogo.php?id=<?php echo $idc;?>">Volver</a></td></tr>
        
           
        <?php }?>
        </tbody>
        
        </table>
            </div>
    </body>
     <div id="foot"><?php include './footer.php';?></div>
</html>
