<?php include_once"../secciones/header.php"?>
		<aside>
		<div class="nav-admin-home">
	<img class="image_user" src="../../img/avatar2.png" />
	<span class="name_user"><?php print $_SESSION['nombre_usuario'];?></span>
	<ul class="first">
	<li><a class="active" href="#">Usuarios</a></li>
	</ul>
	<ul class="second">
		
	<li><a href="../gestion_conductor/">Conductores</a></li>
		<li><a  href="../gestion_contrato/">Contratos</a></li>
	</ul>
	<ul class="last">
	<li><a  href="../gestion_bus/">buses</a></li>
	<li><a  href="../gestion_ruta/">Rutas</a></li>

	</ul>
	
</div>
		</aside>
		<section class="content">
			<?php
				include_once "usuario.php";
			?>

		</section>
		
	</div>

	

</body>
</html>
