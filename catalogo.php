<?php 


        include './conexion.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
      
        
if( isset($_GET['id']))
{
    $id = $_GET['id'];

        
        
      
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
        <div id="bdy">
         <?php $result   = $mysqli->query("SELECT * FROM productos where Categorias_idCat=".$id); ?>
              <?php  while ($campo = mysqli_fetch_object($result)) 
                                                {  ?>
        <table id="catal">
            <tbody>
                 <tr class="pr">
                    <th class="pr2">Nombre: <?php echo $campo->nombre?> </th>
                </tr>
                 <tr class="pr">
                     <th>  <img src="imgProductos/<?php echo $campo->foto?>" ></th>
                </tr>
               
                <tr >
                    <th class="pr2">Descripcion: <?php echo $campo->descripcion?> </th>
                </tr>
                 <tr>
                     <th class="pr2">Cantidad disponibe: <?php echo $campo->cantidad?> </th>
                </tr>
                <tr>
                    <th class="pr2">Valor: <?php echo $campo->presioVenta?> </th>
                </tr>
                 <tr>
                     <th>  <form name="form1" method="post" action="carrito.php">
                     <input type="image" name="imageField" id="imageField" src="img/comprar.gif">
              <input name="nombre" type="hidden" id="nombre" value="<?php echo $campo->nombre; ?>">
              <input name="precio" type="hidden" id="precio" value="<?php echo $campo->presioVenta; ?>">
              <input name="cantidad" type="hidden" id="cantidad" value="1">
            </form> </th>
                </tr>

            </tbody>
        </table>
         <?php } ?>
            </div>
    </body>
</html>
