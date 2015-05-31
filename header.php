<?php 

?>

<header>
      <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <div id="banner">
            <img id="log" src="img/logo.png">
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
				<li><a href="#"><span class="quinto"><i class="icon icon-mail"></i></span>Contacto</a></li>
                                 <li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Inicio sesion</a>
                                     <ul>
                                         <form action="index.php">
                                         <li><a href="#">Usuario:</a></li>
                                         <li> <input type="text" name="usu" required></li>
                                         <li><a href="#">Contraseña:</a></li>
                                         <li> <input type="password" name="contra" required></li>
                                         <li>   <input type="submit" name="submit" value="Entrar" class="bt_login" /></li>
                                         </form>
                                        
                                     </ul>  
                                 </li>
                                <li><a href="#"><span class="cuarto"><i class="icon icon-text"></i></span>Carrito</a></li>
			</ul>
		</nav>
            </div>
    </header>
