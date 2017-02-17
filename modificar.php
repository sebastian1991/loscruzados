<?php
include 'conexion.php'; 

$id=$_REQUEST['rut'];
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$comuna=$_POST['comuna'];
$pass=$_POST['pass'];
$perfil=$_POST['perfil'];


$query="UPDATE socios SET nombre='$nombre', rut='$rut', email='$email', telefono='$telefono', comuna='$comuna', pass='$pass', profile='$perfil' where rut='$id'";
$result = mysql_query($query,$connect);
         if($result)
         {
           
             echo"<script>
              alert('Datos actualizados correctamente')
         window.location='index-admin.php'
         </script>";  
         }
         else
         {
             echo"<script>
              alert('ERROR! Datos no ingresados')
         window.location='index-admin.php'
         </script>";  
         }
      
      ?>