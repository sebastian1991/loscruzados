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
<form method="post" action="comunicadossubir.php" enctype="multipart/form-data">
               
                   <div class="col-md-24">
                   <div class="col-xs-3">
                   
                        <label>Titulo</label>
                        <input class=" form-control" type="text" name="titulo">
                
                        <label>Descripcion</label>
                       <textarea  class=" form-control" name="descripcion"></textarea>
               
                    <input  class="help-block" type="file" name="archivo">
                
                    <input class="btn btn-primary"  type="submit" value="subir" name="subir">
                </div>
            </div>
            </form>            
<br><br>

<table class="table table-striped">
            <tr>
                <td >Titulo</td>
                <td>Descripcion</td>
                <td>Nombre</td>
                <td>Operaciones</td>
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
    
            <td><a  href="eliminarcomunicado.php?idc=<?php echo $row['idcomunicados'];?>"><input class="btn btn-danger"  type=button value="Eliminar"></a></td>
            </tr>
                
          <?php  } ?>
            
        </table>
       
       
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  
</html>