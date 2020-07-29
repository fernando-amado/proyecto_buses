<?php include_once"../secciones/header.php"?>
		<aside>
		<div class="nav-admin-home">
	<img class="image_user" src="../../img/avatar2.png" />
	<span class="name_user"><?php print $_SESSION['nombre_usuario'];?></span>
	<ul class="first">
	<li><a class="active" href="#">Usuarios</a></li>
	</ul>
	<ul class="second">
		
		<li><a  href="../gestion_conductor/index.php">Conductores</a></li>
		
		<li><a  href="../gestion_ruta/index.php">Rutas</a></li>
	</ul>
	<ul class="last">
		<li><a class="<?php if($output[1] == 'subjects'){ echo 'active'; } ?>" href="/modules/subjects">Materias</a></li>
		<li><a class="<?php if($output[1] == 'groups'){ echo 'active'; } ?>" href="/modules/groups">Grupos</a></li>
	</ul>
	<ul class="last">
		<li><a  class="<?php if($output[1] == 'assists'){ echo 'active'; } ?>" href="/modules/assists">Asistencias</a></li>
	</ul>
</div>
		</aside>
		<section class="content">
			<?php
				include_once "form_default.php";
			?>

		</section>
	</div>
	<?php require_once "registrar.php" ?>
	<?php require_once "actualizar.php" ?>

</body>
</html>
