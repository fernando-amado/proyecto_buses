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
	<title>Proyecto Buses</title>
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/estilos-menu.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="css/style_icons.css" media="screen, projection" type="text/css" />
</head>
<body>
	<div class="wrapper">
		<header class="header">
		<div class="info-user">
	<img class="image_user"  src="img/avatar2.png"/>
	<span class="name_user"><?php echo $_SESSION ['nombre_usuario'];?></span>
	<span class="logout"><a href="conexiones/cerrar.php">Cerrar Sesión</a></span>
	<span class="user_active"></span>
</div>
<div class="info-school-period">
	<span class="school_period_user">
		Bienvenido © 2020
		
	</span>
</div>
		</header>
		<aside>
		<div class="nav-admin-home">
	<img class="image_user" src="img/avatar2.png" />
	<span class="name_user"><?php print $_SESSION['nombre_usuario'];?></span>
	<ul class="first">
	<li><a  href="vistas/gestion_usuario/">Usuarios</a></li>
	</ul>
	<ul class="second">
		
		<li><a  href="vistas/gestion_conductor">Conductores</a></li>
		<li ><a href="vistas/gestion_contrato">Contratos</a></li>
	</ul>
	<ul class="last">
	<li><a  href="vistas/gestion_bus/">Buses</a></li>
		<li><a  href="vistas/gestion_ruta/">Rutas</a></li>
	</ul>
	<ul class="last">
		<li><a  class="<?php if($output[1] == 'assists'){ echo 'active'; } ?>" href="/modules/assists">Asistencias</a></li>
	</ul>
</div>
		</aside>
		<img style="width:971px; height:600px; float:right; box-shadow: 0 2px 6px rgba(0,0,0,0.1); pointer-events: none;" src="img/1.png" />
	</div>
</body>
</html>