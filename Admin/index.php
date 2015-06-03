<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/styleIndex.css" type="text/css" media="screen" />
    </head>
     <?php include './header.php';?>
    <body>
        <div>
        <?php
        if(isset($_SESSION['admins']))
        {
            ?>
            <img id="inde" src="../img/seo.jpg" width="800px">
     <?php  }
     else{
        ?>
        <img id="inde" src="../img/error403.png">
     <?php }?>
        </div>
    </body>
</html>
