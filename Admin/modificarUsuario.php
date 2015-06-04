<?php include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        $id=$_GET['id'];
        $sql ="SELECT * FROM usuarios where idusuario=$id ";
        $consulta= $mysqli->query($sql);
        $campos=  mysqli_fetch_object($consulta);
    
        if(isset($_POST['op']))
        {
        if($id > 0 )
        {
        $nombreUsu = $_POST['nomU'];
        $contrasena = $_POST['cont'];
        $email =$_POST['ema'];
        
        }
                 
         $query = "update usuarios set nombreUsu='$nombreUsu', contrasena='$contrasena',"
         . "email='$email' WHERE idusuario=$id";
     
        $mysqli->query($query) or die('Error al procesar consulta: ' . mysql_error());
        echo 'usuario modificada';
        header('Location:usuarios.php');               
        }
        
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de Usuarios</title>
        <link rel="stylesheet" href="css/estiloAgregarUsuario.css">
    </head>
    <header>
        <?php include'header.php'?>
    </header>
    <body>    
        <h1>Usuarios</h1>
        <br>  
        <br>
        <form action="" method="POST" enctype="multipart/form-data"> 
        <table class="tg">
            <tr>
                <th class="tg-s6z2" colspan="2">Modificar Usuario</th>
            </tr>
            <tr>
                <td class="tg-031e">Nombre de usuario</td>
                <td class="tg-031e"><input type="text" name="nomU" required value="<?php echo $campos->nombreUsu;?>"></td>
            </tr>
            <tr>
                <td class="tg-031e">Contraseña</td>
                <td class="tg-031e"><input type="text" name="cont" required value="<?php echo $campos->contrasena;?>"></td>
            </tr>
            <tr>
                <td class="tg-031e">Email</td>
                <td class="tg-031e"><input type="email" name="ema" required value="<?php echo $campos->email;?>"></td>
            </tr>
            <tr>
                <td class="tg-s6z2" colspan="2"><input type="submit" name="op" value="Modificar Usuario"></td>
            </tr>
            
        </table>
 </body>   
  <div id="foot"><?php include './footer.php';?></div>
</html>