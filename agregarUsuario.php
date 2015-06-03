<?php 
include 'conexion.php';
include 'conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();


if(isset($_POST['op']))
{
$nombreUsu = $_POST['nomU'];
$contrasena = $_POST['cont'];
$contrasena2 = $_POST['cont2'];
$cedula=$_POST['cedu'];
$email =$_POST['ema'];

$sql1 ="SELECT * FROM usuarios where idusuario =".$cedula;
$consulta1=  mysql_query($sql1);

$res= mysql_num_rows($consulta1);

if($res<=0)
{
if($contrasena==$contrasena2)
{
$sql ="INSERT INTO usuarios(nombreUsu, contrasena, email) VALUES('$nombreUsu', '$contrasena', '$email')";
$consulta=  mysql_query($sql);
if ($consulta)
{
    echo "<script>
    alert('Datos registrados');
    location.href='usuarios.php';
    </script>";
}  
}
 else 
{
echo "<script>
    alert('Las contaseñas no coinsiden');
    location.href='agregarUsuario.php';
    </script>";    
}
}
else
{
  echo "<script>
    alert('La cedula ya existe en nuestro sistema');
    location.href='agregarUsuario.php';
    </script>";     
}
                
}                         
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de Usuarios</title>
        <link rel="stylesheet" href="Admin/css/estiloAgregarUsuario.css">
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
                <th class="tg-s6z2" colspan="2">Agregar Usuario</th>
            </tr>
            <tr>
                <td class="tg-031e">Cedula</td>
                <td class="tg-031e"><input type="number" name="cedu" required size="11"></td>
            </tr>
            <tr>
                <td class="tg-031e">Nombre de usuario</td>
                <td class="tg-031e"><input type="text" name="nomU" required></td>
            </tr>
            <tr>
                <td class="tg-031e">Contraseña</td>
                <td class="tg-031e"><input type="password" name="cont" required></td>
            </tr>
             <tr>
                <td class="tg-031e">Vuelva a escribir la contraseña</td>
                <td class="tg-031e"><input type="password" name="cont2" required></td>
            </tr>
            <tr>
                <td class="tg-031e">Email</td>
                <td class="tg-031e"><input type="email" name="ema" required></td>
            </tr>
            <tr>
                <td class="tg-yzpx" colspan="2"><input type="submit" name="op" value="Agregar Usuairo"></td>
            </tr>
        </table>
    </body>   
</html>