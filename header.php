<?php 
session_start();
include 'conexion.php';
include 'conex.php';
        $mysql = new conexioni();
        $mysqli=$mysql->conctar();
?>

<header>
      <nav id="nav1">
			<ul>
				<li><a href="#"><span class="primero"><i class="icon icon-house"></i></span>Inicio</a></li>
				<li><a href="#"><span class="segundo"><i class="icon icon-tag"></i></span>Categorias</a>
					<ul>
                                             <?php $result   = $mysqli->query("SELECT * FROM categorias"); ?>
                                            <?php  while ($campo = mysqli_fetch_object($result)) 
                                                {  ?>
						<li><a href="#"><?php echo $campo->nombreCat; ?></a></li>
						 <?php } ?>
					</ul>
				</li>
				<li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Servicios</a></li>
				<li><a href="#"><span class="cuarto"><i class="icon icon-text"></i></span>Acerca de</a></li>
				<li><a href="#"><span class="quinto"><i class="icon icon-mail"></i></span>Contacto</a></li>
                                 <li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Inicio sesion</a>
                                     <ul>
                                         <li><a href="#">Usuario</a></li>
                                         <li> <input type="text" name="desc" required></li>
                                     </ul>  
                                 </li>
                                <li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Carrito</a></li>
			</ul>
		</nav>
</header>
    

