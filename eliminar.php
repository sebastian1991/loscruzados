
       <?php
session_start();
include 'conexion.php';

$id=$_GET['rut'];


$query="DELETE FROM socios where rut='$id' ";

$result = mysql_query($query,$connect);
if($result){
	echo "<script>
               alert('Eliminado correctamente')
         window.location='index-admin.php'
         </script>";
}else{
	echo "<script>
               alert('No se puede eliminar')
         window.location='index-admin.php'
         </script>";
}

?>
   
