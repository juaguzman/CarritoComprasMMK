<?php 

require_once '../conexion.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();   
if(!isset($_SESSION["admins"]))
{
   if (isset($_POST['adm']))
   {
       $nickname=$_POST['adm'];
       $contrasena=$_POST['contra'];
       $result1   = $mysqli->query("SELECT * FROM admin WHERE nombreAdmi = '$nickname' and contrasena='$contrasena' ");
       
       $num = mysqli_num_rows($result1);
       
       if($num<=0)
       {
          echo '<script language="javascript">alert("usuario ivalido"); window.location="index.php"; </script>'; 
       }
 else {
            $result1   = $mysqli->query("SELECT * FROM admin WHERE nombreAdmi = '$nickname' and contrasena='$contrasena' ");
           $campo1=  mysqli_fetch_array($result1);
           $_SESSION['idadmi']=$campo1['idAdmin'];
           $_SESSION["admins"]=$nickname;
           echo '<script language="javascript">alert("Bienvenido administrador " ); window.location="index.php"; </script>'; 
       }
   }
}
 else {
     
    $_SESSION["admins"];
}
?>

<header>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
        <div id="banner">
            <img id="log" src="../img/logo.png">
            <div id="prue">
            <p> <?php if (!isset($_SESSION["admins"])) {
			echo "Invitado";}else {echo $_SESSION["admins"];} ?> </p>
            </div>
        </div>
    
        <div id="navi">
         <nav>
            <ul>
            <li><a href="index.php"><span class="primero"><i class="icon icon-house"></i></span>Inicio</a></li>
            <li><a href="categoria.php"><span class="segundo"><i class="icon icon-tag"></i></span>Categorias</a></li>
            <li><a href="productos.php"><span class="tercero"><i class="icon icon-suitcase"></i></span>Productos</a></li>
            <li><a href="usuarios.php"><span class="cuarto"><i class="icon icon-text"></i></span>Usuarios</a></li>
            <li><a href="contato.php"><span class="quinto"><i class="icon icon-mail"></i></span>Historial de compras</a></li>
            <li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Inicio sesion Administrador</a>
                <ul>
                    <form  action="index.php" method="post">
                    <li><a href="#">Usuario:</a></li>
                    <li> <input type="text" name="adm" required></li>
                    <li><a href="#">Contraseña:</a></li>
                    <li><input type="password" name="contra" required></li>
                    <li><input type="submit" name="submit" value="Entrar" class="bt_login" /></li>
                    </form>
                </ul>  
            </li>
            <li><a href="#"><span class="quinto"><i class="icon icon-text"></i></span><?php if (!isset($_SESSION["admins"])) {
            echo "Invalido";}else {echo $_SESSION["admins"];} ?></a></li>
                               
            </ul>
        </nav>
    </div>
</header>
