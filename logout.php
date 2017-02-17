<?php
@session_start();
session_unset();
session_destroy();

    echo "<script>
               alert('Adios')
         window.location='index.html'
         </script>";


?>