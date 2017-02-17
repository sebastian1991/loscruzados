<?php

      session_start();
include 'conexion.php';

      $rut = $_POST['rut'];
      $mes = $_POST['mes'];
      $valor = $_POST['valor'];

      $query= "INSERT INTO pagos (rut, mes, valor) VALUES ('".$rut."', '".$mes."','".$valor."')";


        $result = mysql_query($query,$connect);
         if($result)
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
         window.location='index-admin.php'
         </script>";  
         }
      
      ?>