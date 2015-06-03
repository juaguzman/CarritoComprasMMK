<?php include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();

    $id=$_GET['id'];
    $sql ="SELECT * FROM productos where idProducto=$id ";
    $consulta= $mysqli->query($sql);
    $campos=  mysqli_fetch_object($consulta);
    
    if(isset($_POST['op']))
    {
    
   
    if($id > 0 )
    {
    $fotoN = $campos->foto;
    $ruta = "../imgProductos/";
    
    $nombre = $_POST['nom'];
    $descripcion = $_POST['des'];
    $cantidad =$_POST['can'];
    $precioVenta =$_POST['preV'];
    $foto = $_FILES['imge']['name'];
    $precioCompra =$_POST['preC'];
    $categoria = $_POST['car'];
    
    if($_FILES['imge']['name']!=NULL)
    {
     unlink($ruta.$fotoN);   
    }
    
    if ($_FILES["imge"]["error"] > 0)
    {
         $query = "update productos set nombre='$nombre', descripcion='$descripcion',"
         . "cantidad='$cantidad',presioVenta='$precioVenta',"
         . "PresioCompra='$precioCompra',Categorias_idCat='$categoria' "
         . " WHERE idProducto=$id";
     
        $mysqli->query($query) or die('Error al procesar consulta: ' . mysql_error());
        echo 'Porducto modificada';
        header('Location:productos.php'); 
    }
    else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limite_kb = 300;
        if (in_array($_FILES['imge']['type'], $permitidos) && $_FILES['imge']['size'] <= $limite_kb * 1024)
        {
        if (!file_exists($ruta.$foto)){
            $resultado = move_uploaded_file($_FILES['imge']['tmp_name'], $ruta.$foto);
	if ($resultado)
        {
         
         echo "el archivo ha sido movido exitosamente";
         echo "id='$id' y nombre='$nombre' y descripcion='$descripcion'y cantidad='$cantidad'y precioVenta='$precioVenta'y imagen='$foto' y precioCompra='$precioCompra' y categoria='$categoria'";
         
         $query = "update productos set nombre='$nombre', descripcion='$descripcion',"
         . "cantidad='$cantidad',presioVenta='$precioVenta', foto='$foto',"
         . "PresioCompra='$precioCompra',Categorias_idCat='$categoria' "
         . " WHERE idProducto=$id";
     
        $mysqli->query($query) or die('Error al procesar consulta: ' . mysql_error());
        echo 'Porducto modificada';
        header('Location:productos.php');               
        } 
        else 
        {
	echo "ocurrio un error al mover el archivo.";
        echo "$foto y $ruta";
        }
        }
        else {
	echo $_FILES['imge']['name'] . ", este archivo existe";
	}
        }
        else{
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
        }
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
    <th class="tg-031e" colspan="2">Modificar Producto </th>
  </tr>
  <tr>
    <td class="tg-031e">Nombre</td>
    <td class="tg-031e"><input type="text" name="nom" required value="<?php echo $campos->nombre;?>"></td>
  </tr>
  <tr>
    <td class="tg-031e">Descripcion</td>
    <td class="tg-031e"><textarea name="des" required ><?php echo $campos->descripcion;?>"></textarea></td>
  </tr>
  <tr>
    <td class="tg-031e">Cantidad</td>
    <td class="tg-031e"><input type="text" name="can" required value="<?php echo $campos->cantidad;?>"></td>
  </tr>
  <tr>
    <td class="tg-031e">Precio de venta</td>
    <td class="tg-031e"><input type="text" name="preV" required value="<?php echo $campos->presioVenta;?>"></td>
  </tr>
  <tr>
    <td class="tg-031e">Imagen</td>
    <td class="tg-031e"><input type="file" name="imge"></td>
  </tr>
  <tr>
    <td class="tg-031e">Precio de compra</td>
    <td class="tg-031e"><input type="text" name="preC" required value="<?php echo $campos->PresioCompra;?>"></td>
  </tr>
  <tr>
    <td class="tg-031e">Categoria</td>
    <td class="tg-031e">
        <?php $result = $mysqli->query("SELECT * FROM categorias"); ?>
                               
        <select name="car" required >
                                <option value="">Seleccione una categoria</option>
                                <?php  while ($campo = mysqli_fetch_object($result)) 
                                     {  ?>
                                        
                                        <option value="<?php echo $campo->idCat; ?>"><?php echo $campo->nombreCat ?></option>
                                    <?php } ?>
                                        
                            </select> 
       </td>
  </tr>
  <tr>
    <th class="tg-031e" colspan="2"><input type="submit" name="op" value="Modificar Producto"></th>
  </tr>
</table>   
        </form>
    </body>
</html>
