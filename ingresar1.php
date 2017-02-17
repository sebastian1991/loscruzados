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

<?php
session_start();
include 'conexion.php';


if(isset($_POST['enviar'])){
  $rut = $_POST['rut'];
  $pass = $_POST['pass'];
  $log = mysql_query("SELECT * FROM socios where  rut='$rut' AND pass = '$pass'");
    
$rut1 = urldecode($rut);

  if(mysql_num_rows($log)>0){
    $row = mysql_fetch_array($log);

$row = $row['profile'];
switch($row){
  case 'socio':
  echo "<script>
               alert('Bienvenido')
         window.location='index-socio.php?id=$rut1'
         </script>";
         break;
case 'admin':
  echo "<script>
               alert('Bienvenido')
         window.location='index-admin.php?id=$rut1'
         </script>";
         break;



$_SESSION['rut'] = $row['rut'];

}
    
  }else{

 echo"<script>
              alert('Usuario o Contraseña Invalidos')
         window.location='index.html'
         </script>";  
  }
  
}
?>

 <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  
</html>