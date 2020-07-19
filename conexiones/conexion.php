<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $db="proyecto_buses";

$conexion = mysqli_connect($server,$user,$pass,$db);
if(!$conexion)
{
	echo "<h3>No se ha podido conectar la Base de datos, verifique e intente nuevamente</h3><hr><br>" . $conexion->connect_errno;
}

?>