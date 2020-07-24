
<div class="info-user">
	<img class="image_user" src="/images/users/<?php echo $_SESSION['image'];?>" />
	<span class="name_user"><?php echo $_SESSION ['nombre_usuario'];?></span>
	<span class="logout"><a href="conexiones/cerrar.php">Cerrar Sesión</a></span>
	<span class="user_active"></span>
</div>
<div class="info-school-period">
	<span class="school_period_user">
		Periodo Escolar >
		<a href="#"><?php print $_SESSION['school_period']; ?></a>
	</span>
</div>