<?php include_once"../secciones/header.php"?>
		<aside>
		<div class="nav-admin-home">
	<img class="image_user" src="../../img/avatar2.png" />
	<span class="name_user"><?php print $_SESSION['nombre_usuario'];?></span>
	<ul class="first">
	<li><a  href="../gestion_usuario">Usuarios</a></li>
	</ul>
	<ul class="second">
		
		<li><a class="active" href="#">Conductores</a></li>
		<li><a  href="../gestion_contrato/">Contratos</a></li>
		
		
	</ul>
	<ul class="last">
		<li><a  href="../gestion_bus/index.php">Buses</a></li>
		<li><a  href="../gestion_ruta/index.php">Rutas</a></li>
	</ul>
	<ul class="last">
		<li><a  class="<?php if($output[1] == 'assists'){ echo 'active'; } ?>" href="/modules/assists">Asistencias</a></li>
	</ul>
</div>
		</aside>
		<section class="content">
			<?php
				include_once "conductor.php";
			?>

		</section>
	</div>
	<?php require_once "registrar.php" ?>
	<?php require_once "actualizar.php" ?>
	<?php require_once "consultar.php" ?>

</body>
</html>