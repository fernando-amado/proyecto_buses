<?php 

session_start();
if(!isset($_SESSION['rol'])){
    header('location: login.php');

}
else{
    if($_SESSION['rol'] !=1){
        header('location: login.php');
    }
}
$usuario=$_SESSION['rol'];
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<title>Sistema Escolar</title>
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/estilos-menu.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="css/style_icons.css" media="screen, projection" type="text/css" />
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<?php
				include_once "vistas/secciones/about-user.php";
			?>
		</header>
		<aside>
			<?php
					include_once "vistas/secciones/administrador.php";
				
			?>
		</aside>
		<img style="width:971px; float:right; box-shadow: 0 2px 6px rgba(0,0,0,0.1); pointer-events: none;" src="images/dashboard.png" />
	</div>
</body>
</html>