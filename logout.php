<?php session_start();
	session_destroy();
        
         echo '<script language="javascript">alert("Session cerrada adios" ); window.location="index.php";</script>'; 
?>

