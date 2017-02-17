<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
   
    <link href="css/style.css" rel="stylesheet" type="text/css">

        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <?php
        include 'config.inc.php';
     include 'conexion.php';

            $query = "SELECT * from comunicados where idcomunicados=".$_GET['id'];
    $result = mysql_query($query,$connect);

            if($row = mysql_fetch_array($result)){
                if($row['nombre_archivo']==""){?>
        echo "<script>
               alert('No existe el archivo')
         window.location='index-admin.php'
         </script>";
                <?php }else{ ?>
                    <div class="embed-container">
        <iframe   width="560" height="315"  frameborder="0" allowfullscreen  src="archivos/<?php echo $row['nombre_archivo']; ?>"  ></iframe>
                </div>
                <?php } } ?>
    </body>
</html>
