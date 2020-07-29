<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="../../css/estilos-menu.css">
    <link rel="stylesheet" type="text/css" href="../../css/style_icons.css"   />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    


</head>
<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$base_datos="proyecto_buses";

$obj_conexion = 
mysqli_connect($servidor,$usuario,$contraseña,$base_datos);
if(!$obj_conexion)
{
	echo "<h3>No se ha podido conectar la Base de datos, verifique e intente nuevamente</h3><hr><br>";
}
?>


    