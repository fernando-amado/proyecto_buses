<?php
	session_start();
	$usuario=$_SESSION['rol'];
	include_once '../../conexiones/header.php';

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
	<link rel="stylesheet" href="../../css/estilos-menu.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../../css/style_icons.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../../css/styles.css">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<?php
				include_once "../secciones/about-user.php";
			?>
		</header>
		<aside>
			<?php
				
				
					include_once "../secciones/administrador.php";
				
			?>
		</aside>
		<section class="content">
			<?php
				include_once $view_form;
			?>

		</section>
	</div>
	<?php require_once "registrar.php" ?>
<<<<<<< HEAD
    <?php require_once "actualizar.php" ?>
=======

>>>>>>> c2686eee28e5bf5a5efc9c83ab010bd1ccc0f0b8
</body>
</html>
