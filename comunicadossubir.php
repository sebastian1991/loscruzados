<?php
include_once 'config.inc.php';
include 'conexion.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
    
            $query = "INSERT INTO comunicados(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
          $result = mysql_query($query,$connect);

            if($result){
                echo "<script>
               alert('Archivo Guardado Correctamente')
         window.location='comunicados.php'
         </script>";
            }
        } else {
           echo "<script>
               alert('Error no se puede guardar el archivo')
         window.location='comunicados.php'
         </script>";
        }
    }
}
?>