
       <?php
session_start();
include 'conexion.php';


$idc=$_REQUEST['idc'];

$query="DELETE FROM  comunicados where  idcomunicados = '$idc'";

$result = mysql_query($query,$connect);
if($result){
	echo "<script>
               alert('Eliminado correctamente')
         window.location='comunicados.php'
         </script>";
}else{
	echo "<script>
               alert('No se puede eliminar')
         window.location='comunicados.php'
         </script>";
}

?>
   
