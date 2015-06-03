<?php 
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
$sql ="SELECT * FROM productos";
$consulta=  mysql_query($sql);

if(isset($_POST['op']))
{
$nombre = $_POST['nom'];
$descripcion = $_POST['des'];
$cantidad =$_POST['can'];
$precioVenta =$_POST['preV'];
$foto = $_FILES['imge']['name'];
$precioCompra =$_POST['preC'];
$categoria = $_POST['car'];

$ruta="../imgProductos/". $foto;
$temp=$_FILES['imge']['tmp_name'];

if ($_FILES["imge"]["error"] > 0){
 echo "ha ocurrido un error";
}
 else { $permitidos = array ("image/jpg", "image/jpeg", "image/gif", "image/png");
            $limite_kb = 300;
       if (in_array($_FILES['imge']['type'], $permitidos) && $_FILES['imge']['size'] <= $limite_kb * 1024)
       {
        if (!file_exists($ruta)){
        $resultado = move_uploaded_file($_FILES['imge']['tmp_name'], $ruta);
	if ($resultado){
            echo "el archivo ha sido movido exitosamente";
            $sql ="INSERT INTO  productos VALUES('','$nombre','$descripcion',$cantidad,$precioVenta,'$foto',$precioCompra,'$categoria')";
            $consulta=  mysql_query($sql);
            if ($consulta){
                echo "<script>
                alert('Datos registrados');
                location.href='productos.php';
                </script>";
                }                     
                } 
                else {
		echo "ocurrio un error al mover el archivo.";
                echo "$foto y $ruta";
                }
                }
                else {
		echo $_FILES['imge']['name'] . ", este archivo existe";
                echo"<script>alert('archivo ya existe en la cartelera')</script>"; 
		}
                }
                else{
                echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
                }
                }
 
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de productos</title>
        <link rel="stylesheet" href="css/estiloAgregarProducto.css">
    </head>
    <header>
        <?php include'header.php'?>
    </header>
    <body>
        <h1>Productos</h1>
        <br>
        <br>
        <form action="" method="POST" enctype="multipart/form-data">
         <table class="tg">
  <tr>
      <th class="tg-031e" colspan="2">Agregar Producto</th>
  </tr>
  <tr>
    <td class="tg-031e">Nombre</td>
    <td class="tg-031e"><input type="text" name="nom" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Descripcion</td>
    <td class="tg-031e"><textarea name="des" required ></textarea></td>
  </tr>
  <tr>
    <td class="tg-031e">Cantidad</td>
    <td class="tg-031e"><input type="text" name="can" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Precio de venta</td>
    <td class="tg-031e"><input type="text" name="preV" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Imagen</td>
    <td class="tg-031e"><input type="file" name="imge" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Precio de compra</td>
    <td class="tg-031e"><input type="text" name="preC" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Categoria</td>
    <td class="tg-031e"><?php $result = $mysqli->query("SELECT * FROM categorias"); ?>
                               
                            <select name="car" >
                                <option value="0">Seleccione una categoria</option>
                                <?php  while ($campo = mysqli_fetch_object($result)) 
                                     {  ?>
                                        
                                        <option value="<?php echo $campo->idCat; ?>"><?php echo $campo->nombreCat ?></option>
                                    <?php } ?>
                                        
                            </select> 
    </td>
  </tr>
  <tr>
    <th class="tg-031e" colspan="2"><input type="submit" name="op" value="Agregar Producto"></th>
  </tr>
</table>   
        </form>
    </body>
<?php include './footer.php';?>
</html>