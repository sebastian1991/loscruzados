<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
 
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
 
 

  

<?php
$id=$_GET['id'];
?>
<center>
<p align="right"><a href="logout.php">Cerrar Sesión</a></p>
<h1>Contacto</h1>
<form  class="form-inline" role="form" method="post" action="contactoenviar.php?id=<?php echo $id ?>">
<div class="form-group">
<table class=" table " width="200" border="0">
  <tr>
    <td><label>Nombre:</label></td>
    <td><input class=" form-control" name="nombre" type="text" id="nombre" onkeypress="return sololetras(event)"  onpaste="false" required ></td>
  </tr>
   
  <tr>
    <td><label>Email:</label></td>
    <td><input class="form-control" name="email" type="email" id="email" required ></td>
  </tr>

    <tr>
    <td><label>Telefono:</label></td>
    <td><input class="form-control" name="telefono" type="numeric" id="telefono" required  ></td>
  </tr>

 
   <tr>
    <td><label>Asunto:</label></td>
    <td><input class=" form-control" name="asunto" type="text" id="asunto"  required  ></td>
  </tr>

  <tr>
  <td><label>Mensaje:</label></td>
 <td><textarea  class=" form-control" rows="6" name="mensaje"  id="mensaje"required ></textarea></td>
  
</tr>
 


</table>
<button type="submit" class="btn btn-primary">Enviar</button>

</form>
</center>

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>