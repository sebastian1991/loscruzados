<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Socio Cooperador</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 <style type="text/css">
    body {

}
    </style>
<script>
funtion soloLetras(e){
  key=e.keyCode || e.which;
  teclado=String.fromCharCode(key).toLowerCase();
  letras="abcd-efghijklmnñopqrstuvwxyz";
  especiales="8-37-38-46-164";
  teclado_especial=false;
  for(var i in especiales){
    if(key==especiales[i]){
      teclado_especial=true:break;
    }
  }
  if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
  }
}
</script>

  </head>
  <body>
 
 
<p align="right"><a href="logout.php">Cerrar Sesión</a></p>
  

<?php


$id=$_REQUEST['rut'];
$con = new mysqli('localhost','root','','loscruzados');
$datos = $con->query("SELECT * FROM socios where rut='$id'");




?>
<center>
<h1>Actualizar Informacion</h1>
<form  class="form-inline" role="form" method="post" action="modificarsocio.php?rut=<?php echo $id ;?>">
<div class="form-group">
 <?php while($row = mysqli_fetch_array($datos)){ ?> 
<table class=" table " width="200" border="0">
  <tr>
    <td><label>Nombre:</label></td>
    <td><input class=" form-control" name="nombre" type="text" id="nombre" onkeypress="return sololetras(event)"  onpaste="false" value="<?php echo $row['nombre'];?>"></td>
  </tr>
   <tr>
    <td><label>Rut:</label></td>
    <td><input class=" form-control" name="rut" type="text" id="rut" value="<?php echo $row['rut'];?>"></td>
  </tr>
  <tr>
    <td><label>Email:</label></td>
    <td><input class="form-control" name="email" type="email" id="email" required value="<?php echo $row['email'];?>"></td>
  </tr>
    <tr>
    <td><label>Telefono:</label></td>
    <td><input class="form-control" name="telefono" type="numeric" id="telefono" required value="<?php echo $row['telefono'];?>"></td>
  </tr>

  <tr>
   <tr>
    <td><label>Comuna:</label></td>
    <td><input class=" form-control" name="comuna" type="text" id="comuna" onkeypress="return sololetras(event)" value="<?php echo $row['comuna'];?>" ></td>
  </tr>
  <tr>
    <td><label>Password:</label></td>
    <td><input class=" form-control" name="pass" type="password" id="pass" required  value="<?php echo $row['pass'];?>"></td>
  </tr>
 <td><label>Perfil:</label></td>
    <td><select class="form-control" id="perfil" name="perfil">
  <option>Socio</option>

  
</select></td>
  </tr>
 
<?php
                                  }
                                   ?>

</table>
<button type="submit" class="btn btn-primary">Enviar</button>

</form>
</center>

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>