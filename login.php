<?php 
include_once'conexiones/validar.php';
?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/css/all.min.css">
</head>
<body>
	<img class="wave" src="img/wave.png" alt="">
	<div class="contenedor">
		<div class="img">
			<img src="img/sena.svg" alt="">
		</div>
		<div class="contenido-login">
			<form action="" method="post">
				<img src="img/avatar.png" alt="">
				<h3>Inicio sesión</h3>
				<div class="input-div dni">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Usuario</h5>
						<input type="text" name="usuario" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Contraseña</h5>
						<input type="password" name="contrasena" class="input">
					</div>
				</div>
				<a href="">created Warplece</a>
				<input type="submit" class="btn" value="Iniciar sesión">
			</form>
		</div>
	</div>
</body>
<script src="js/login.js"></script>
</html>