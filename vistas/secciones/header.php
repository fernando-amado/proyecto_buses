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

	session_start();
	$usuario=$_SESSION['rol'];

	//Permisos de administrador

	// Formulario actual
	if (!empty($_POST['btn']))
	{
		$view_form = $_POST['btn'].'.php';
	}
	else
	{
		$view_form = 'form_default.php';
	}

	// Pagina actual
	if (!empty($_POST['page']))
	{
		$page = $_POST['page'];
	}
	else
	{
		$page = 1;
	}
	
	// Numero de registros a visualizar
	$max = 50;
	$inicio = ($page - 1) * $max;

	// Cargar datos de usuarios
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<title>Usuarios | Sistema Escolar</title>
	<link rel="icon" type="image/png" href="../../images/favicon.ico" />
	<link rel="stylesheet" href="../../css/estilos-menu.css"  type="text/css" />
	<link rel="stylesheet" href="../../css/style_icons.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../../css/styles.css" type="text/css">
	<script></script>
</head>
<body>
	<div class="wrapper">
		<header class="header">
        <div class="info-user">
	<img class="image_user"  src="../../img/avatar2.png"/>
	<span class="name_user"><?php echo $_SESSION ['nombre_usuario'];?></span>
	<span class="logout"><a href="../../conexiones/cerrar.php">Cerrar Sesión</a></span>
	<span class="user_active"></span>
</div>
<div class="info-school-period">
	<span class="school_period_user">
		Bienvenido © 2020
		
	</span>
</div>
		</header>