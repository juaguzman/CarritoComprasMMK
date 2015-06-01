<?php 
session_start();
require_once '../conexion.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();   
if(!isset($_SESSION["usuario"]))
{
   if (isset($_POST['usu']))
   {
       $nickname=$_POST['usu'];
       $contrasena=$_POST['contra'];
       $result1   = $mysqli->query("SELECT * FROM usuarios WHERE nombreUsu = '$nickname' and contrasena='$contrasena' ");
       
       $num = mysqli_num_rows($result1);
       
       if($num<=0)
       {
          echo '<script language="javascript">alert("usuario ivalido"); window.location="index.php"; </script>'; 
       }
 else {
            $result1   = $mysqli->query("SELECT * FROM usuarios WHERE nombreUsu = '$nickname' and contrasena='$contrasena' ");
           $campo1=  mysqli_fetch_array($result1);
           $_SESSION['idusuario']=$campo1['idusuario'];
           $_SESSION["usuario"]=$nickname;
           echo '<script language="javascript">alert("Bienvenido " ); window.location="index.php"; </script>'; 
       }
   }
}
 else {
     
    $_SESSION["usuario"];
}
?>

<header>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
        <div id="banner">
            <img id="log" src="img/logo.png">
            <div id="prue">
            <p> <?php if (!isset($_SESSION["usuario"])) {
			echo "Invitado";}else {echo $_SESSION["usuario"];} ?> </p>
            </div>
        </div>
        <div id="navi">
         <nav>
			<ul>
                            <li><a href="index.php"><span class="primero"><i class="icon icon-house"></i></span>Inicio</a></li>
				<li><a href="#"><span class="segundo"><i class="icon icon-tag"></i></span>Categorias</a>
					<ul>
                                             <?php $result   = $mysqli->query("SELECT * FROM categorias"); ?>
                                            <?php  while ($campo = mysqli_fetch_object($result)) 
                                                {  ?>
						<li><a href="catalogo.php?id=<?php echo $campo->idCat?>"><?php echo $campo->nombreCat; ?></a></li>
						 <?php } ?>
					</ul>
				</li>
                                <li><a href="servicios.php"><span class="tercero"><i class="icon icon-suitcase"></i></span>Servicios</a></li>
                                <li><a href="acercaDe.php"><span class="cuarto"><i class="icon icon-text"></i></span>Acerca de</a></li>
                                <li><a href="contato.php"><span class="quinto"><i class="icon icon-mail"></i></span>Contacto</a></li>
                                 <li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Inicio sesion</a>
                                     <ul>
                                         <form  action="index.php" method="post">
                                         <li><a href="#">Usuario:</a></li>
                                         <li> <input type="text" name="usu" required></li>
                                         <li><a href="#">Contraseña:</a></li>
                                         <li> <input type="password" name="contra" required></li>
                                         <li>   <input type="submit" name="submit" value="Entrar" class="bt_login" /></li>
                                         </form>
                                        
                                     </ul>  
                                 </li>
                                <li><a href="#"><span class="cuarto"><i class="icon icon-text"></i></span>Carrito</a></li>
                                <li><a href="#"><span class="quinto"><i class="icon icon-text"></i></span>Hola <?php if (!isset($_SESSION["usuario"])) {
			echo "Invitado";}else {echo $_SESSION["usuario"];} ?></a>
                                   
                                </li>
                               
			</ul>
		</nav>
           
            </div>
    </header>
