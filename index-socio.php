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
  
 
 
<center>
<?php
$id=$_GET['id'];
?>
<div class="col-md-12">

<a href="comunicadossocio.php"><button type="button" class="btn btn-primary" >Ver Comunicados</button></a>
<a href="contacto.php?id=<?php echo $id ?>"><button type="button" class="btn btn-primary" >Contacto</button></a>
<p align="right"><a href="logout.php">Cerrar Sesión</a></p>

<br><br>

<?php



$id=$_GET['id'];

$con = new mysqli('localhost','root','','loscruzados');
$datos = $con->query("SELECT * FROM socios where rut='$id'");
$datospagos = $con->query("SELECT * FROM pagos where rut='$id'");


?>
<center><h1> Datos Personales</h1></center>
<div class="col-md-12">


  <?php while($row = mysqli_fetch_array($datos)){ ?> 
<table class="table table-striped">
<thead>
                            <tr >    
                                <td >Nombre:</td>
                               <td><?php echo $row['nombre'];?></td>
                            </tr>
                             <tr >    
                                <td >Rut:</td>
                               <td><?php echo $row['rut'];?></td>
                            </tr>
                             <tr >    
                                <td >Email:</td>
                               <td><?php echo $row['email'];?></td>
                            </tr>
                             <tr >    
                                <td >Telefono:</td>
                               <td><?php echo $row['telefono'];?></td>
                            </tr>
                             <tr >    
                                <td >Comuna:</td>
                               <td><?php echo $row['comuna'];?></td>
                            </tr>
                           
     <tr >    
                                 <td><a href="editarsocio.php?rut=<?php echo $row['rut'];?>"><input class="btn btn-primary" type=button value="Editar Informacion"></a></td>
                           
                            </tr>
                        </thead>
       
                           
                               
                                 
                                   <?php
                                  }
                                   ?>
                                    
                        

                         

</table>
</div>
<center><h1> Informacion de Pagos</h1></center><br><br>
 
<table class="table table-striped">
<thead>
  <tr > 
           
                                <th align="center">Mes</th>
                                <th align="center">Valor</th>
                                
                                
                        
                              
   </tr>
                        </thead>
         <?php while($row = mysqli_fetch_array($datospagos)){ ?> 
                            <tbody>
                                <tr > 
                                    <td><?php echo $row['mes'];?></td>
                                    <td><?php echo $row['valor'];?></td>
                  
                               
                                  
                                   <?php
                                  }
                                   ?>
                                    
                              </tr>

                                </tbody>











  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  
</html>