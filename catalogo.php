<?php 


        include './conexion.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
      
        
if( isset($_GET['id']))
{
    $id = $_GET['id'];

        
        
      $idcat=$id;
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
        <title> Catalogo de ventas</title>
        <link rel="stylesheet" href="css/styleCatal.css" type="text/css" media="screen" />
    </head>
    <?php include './header.php';?>
    <body>
        <div id="titulo">
            <?php $result1 = $mysqli->query("SELECT * FROM categorias where idCat=".$id);?>
            <?php while ($nom=mysqli_fetch_object($result1)){ ?>
            <h1><?php echo $nom->nombreCat?></h1>
             <?php } ?>
        </div>
        <br>
        <br>
        <div id="bdy">
         <?php $result   = $mysqli->query("SELECT * FROM productos where Categorias_idCat=".$id); ?>
            <div id="pro">
              <?php  while ($campo = mysqli_fetch_object($result)) 
                                                {  ?>
        <table id="catal">
            <tbody>
                 <tr class="pr">
                    <th class="pr2">Nombre: <?php echo $campo->nombre?> </th>
                </tr>
                 <tr class="pr">
                     <th>  <img src="imgProductos/<?php echo $campo->foto?>" width="300px" ></th>
                </tr>
               
                <tr >
                    <th class="pr2"><a id="votar" href="descripcion.php?id=<?php echo $campo->idProducto; ?>&idc=<?php echo $idcat; ?>"  >Ver descripcion</a></th>
                </tr>
                 <tr>
                     <th class="pr2">Cantidad disponibe: <?php echo $campo->cantidad?> </th>
                </tr>
                <tr>
                    <th class="pr2">Valor: <?php echo $campo->presioVenta?> </th>
                </tr>
                
                     <form name="form1" method="post" action="carrito.php">
                         <tr>  <th class="pr2"><input name="cantidad" type="number" id="cantidad" value="1" height="50px"></th> </tr>
                      <tr><th> <input type="image" name="imageField" id="imageField" src="img/comprar.gif">
              <input name="nombre" type="hidden" id="nombre" value="<?php echo $campo->nombre; ?>">
              <input name="precio" type="hidden" id="precio" value="<?php echo $campo->presioVenta; ?>">
              <input name="categoria" type="hidden" id="precio" value="<?php echo $campo->Categorias_idCat; ?>">
              <input name="cantDisp" type="hidden" id="precio" value="<?php echo $campo->cantidad; ?>">
              <input name="idprod" type="hidden" id="precio" value="<?php echo $campo->idProducto; ?>">
              <input name="idcat" type="hidden" id="precio" value="<?php echo $idcat; ?>">
            </form> </th>
                </tr>
                 <tr>
                     <th>  
                     
                </tr>

            </tbody>
        </table>
         <?php } ?>
                </div>
            </div>
    </body>
    <?php include './footer.php';?>
</html>
