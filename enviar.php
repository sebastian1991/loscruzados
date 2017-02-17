<?php

      $host = "localhost";
      $usuario = "root";
      $contrasena = "";
      $baseDeDatos ="loscruzados";
 
    
      $tabla = "socios";
 
      function Conectarse()
      {
         global $host,  $usuario, $contrasena, $baseDeDatos, $tabla;
         if (!($link = mysqli_connect($host, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }else {
          }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
           
         }
      return $link; 
      } 
 
      $link = Conectarse();
 
      if($_POST)
      {
         $queryInsert = "INSERT INTO $tabla (nombre, rut, email, telefono, comuna, pass, profile ) 
         VALUES (
         '".$_POST['nombre']."', 
         '".$_POST['rut']."',
         '".$_POST['email']."',
         '".$_POST['telefono']."', 
         '".$_POST['comuna']."',
         '".$_POST['pass']."',
         '".$_POST['perfil']."');";


         $resultInsert = mysqli_query($link, $queryInsert); 
         if($resultInsert)
         {
             echo"<script>
              alert('Datos ingresados correctamente')
         window.location='index-admin.php'
         </script>";  
         }
         else
         {
             echo"<script>
              alert('ERROR! Datos no ingresados')
         window.location='ingresarsocio.html'
         </script>";  
         }
      }
      ?>