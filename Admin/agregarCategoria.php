<?php 
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();

        if(isset($_POST['op']))
{
    $nombreCat = $_POST['nombreCat'];

$sql ="INSERT INTO categorias(nombreCat) VALUES('$nombreCat')";
$consulta=  mysql_query($sql);
if ($consulta)
{
    echo "<script>
    alert('Datos registrados');
    location.href='categoria.php';
    </script>";
}  
                
}                         
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de Categorias</title>
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
                <th class="tg-s6z2" colspan="2">Agregar categoria</th>
            </tr>
            <tr>
                <td class="tg-031e">Nombre categoria</td>
                <td class="tg-031e"><input type="text" name="nombreCat" required></td>
            </tr>
            <tr>
            <td class="tg-jfdm" colspan="2"><input type="submit" name="op" value="Agregar Categoria"></td>
            </tr>
        </table>
    </body> 
     <div id="foot"><?php include './footer.php';?></div>
</html>