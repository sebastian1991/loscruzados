  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar Socio Cooperador</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
    body {

    </style>
  </head>

</script>

  <body>
  

                  

<p align="right"><a href="logout.php">Cerrar Sesión</a></p>
<center><h1> Comunicados Socio Cooperador</h1></center>
<center><h1> Barra Los Cruzados</h1></center>
 <table class="table table-striped">
            <tr>
                <th align="center">Titulo</th>
                <th align="center">Descripcion</th>
                <th align="center">Nombre</th>
                
            </tr>



        <?php
        include 'config.inc.php';
        include 'conexion.php';

         $query="SELECT  * FROM COMUNICADOS ";

$result = mysql_query($query,$connect);

            while ($row = mysql_fetch_array($result)){?>
            <tr>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
           
                <td><a href="archivo.php?id=<?php echo $row['idcomunicados']?>"><?php echo $row['nombre_archivo']; ?></a></td>
    
            
            </tr>
                
          <?php  } ?>
            
        </table>
       
       
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  
</html>