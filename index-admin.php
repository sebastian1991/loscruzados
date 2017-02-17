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







  <body>
  
 
 
<center>


<div class="col-md-12">
<br>
<p align="right"><a href="logout.php">Cerrar Sesión</a></p>
<a href="ingresarsocio.html"><button type="button" class="btn btn-primary" >Ingresar Nuevo Socio</button></a>
<a href="comunicados.php"><button type="button" class="btn btn-primary" >Ingresar Comunicados</button></a>





<br><br>

<form  class="form-inline" role="form" method="post" action="ingresarpagogeneral.php">
<div class="col-xs-3"><input class="form-control" name="rut" type="text" id="rut"  placeholder="Rut"  required=""></div>
<div class="col-xs-3"><select  class="form-control" id="mes" name="mes">
  <option>Seleccionar Mes</option>
  <option>Enero</option>
  <option>Febrero</option>
  <option>Marzo</option>
  <option>Abril</option>
  <option>Mayo</option>
  <option>Junio</option>
  <option>Julio</option>
  <option>Agosto</option>
  <option>Sedtiembre</option>
  <option>Octubre</option>
  <option>Noviembre</option>
  <option>Diciembre</option>
</select> </div>

<div class="col-xs-3"><input class="form-control" name="valor" type="text" id="valor"  placeholder="Valor"  required=""></div>
<button class="btn btn-primary" type="submit" value="Ingresar pago">Ingresar Pago</button> 
</form>                     

<br>


<form  class="form-inline" role="form" method="post" action="index-admin.php">
<input class="form-control" name="rut" type="text" id="rut"  placeholder="Ingrese Rut o Nombre"  required="">
<button class="btn btn-primary" type="submit" value="Ingresar pago">Buscar</button>
</form>




<?php


$con = new mysqli('localhost','root','','loscruzados');




if(isset($_POST['rut'])){
  $filtro = $_POST['rut'];

  $datos = $con->query("SELECT socios.rut, socios.nombre, socios.email FROM socios where rut='$filtro' or nombre ='$filtro'   ");
}else{


$datos = $con->query("SELECT socios.rut, socios.nombre, socios.email FROM socios");

}

?>


<table class="table table-striped">
<thead>
  <tr > 
             <th align="center">Rut</th>
                                <th align="center">Nombre</th>
                                <th align="center">Email</th>
                                <th align="center" colspan="2">Operaciones</th>
                                
                        
                              
   </tr>
                        </thead>
         <?php while($row = mysqli_fetch_array($datos)){ ?> 
                            <tbody>
                                <tr > 
                           <td><?php echo $row['rut'];?></td>
                                    <td><?php echo $row['nombre'];?></td>
                                     <td><?php echo $row['email'];?></td>
                                     <td><a href="detalles.php?rut=<?php echo $row['rut'];?>"><input class="btn btn-primary" type=button value="Detalles">
                                  
                                    <td><a  href="eliminar.php?rut=<?php echo $row['rut'];?>"><input class="btn btn-danger"  type=button value="Eliminar"></a></td>
                                  
                                   <?php
                                  }
                                   ?>
                                    
                              </tr>
 
                                </tbody>


</table>
</div>

 </center>


</script>



  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  
</html>