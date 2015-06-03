<?php include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
        $id=$_GET['id'];
        $sql ="SELECT * FROM categorias where idCat=$id ";
        $consulta= $mysqli->query($sql);
        $campos=  mysqli_fetch_object($consulta);
        $id=$_GET['id'];
            
        if(isset($_POST['op']))
        {
        if($id > 0 )
        {
        $nombreCat = $_POST['nombreCat'];  
        }
                 
        $query = "update categorias set nombreCat='$nombreCat' WHERE idCat=$id ";
     
        $mysqli->query($query) or die('Error al procesar consulta: ' . mysql_error());
        echo 'Categoria modificada';
        header('Location:categoria.php');               
        }
        
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de Usuarios</title>
        <link rel="stylesheet" href="css/estiloAgregarCategoria.css">
    </head>
    <header>
        <?php include'header.php'?>
    </header>
    <body>    
        <h1>Categorias</h1>
        <br>  
        <br>
        <form action="" method="POST" enctype="multipart/form-data"> 
        <table class="tg">
            <tr>
                <th class="tg-s6z2" colspan="2">Modificar categoria</th>
            </tr>
            <tr>
                <td class="tg-031e">Nombre categoria</td>
                <td class="tg-031e"><input type="text" name="nombreCat" required value="<?php echo $campos->nombreCat;?>"></td>
            </tr>
            <tr>
            <td class="tg-jfdm" colspan="2"><input type="submit" name="op" value="Agregar Categoria"></td>
            </tr>
        </table>
    </body>   
    <?php include './footer.php';?>
</html>