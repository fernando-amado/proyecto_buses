
<head>
	<title>Conductor</title>
</head>
<?php include_once '../../conexiones/header.php'; ?>
<h1 class="page-header">Buses</h1>
<div class="well well-sm text-right">
<a class="btn btn-light" href="registrar.php">Nuevo Bus</a>
<a class="btn btn-light" href="../../index.php">Regresar</a>

</div>

</tr>
<?php
$var_consulta = 'SELECT * FROM conductor';
$var_resultado = $obj_conexion->query($var_consulta);
if ($var_resultado->num_rows > 0) { ?>
	<table class="table  table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Documento</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th>Dirección</th>
				<th>Usuario</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php while ($var_dato = $var_resultado->fetch_array()) { ?>

				<tr>
					<td><?php echo $var_dato['nombre']; ?></td>
					<td><?php echo $var_dato['apellidos']; ?></td>
					<td><?php echo $var_dato['documento']; ?></td>
					<td><?php echo $var_dato['telefono']; ?> </td>
					<td><?php echo $var_dato['direccion']; ?> </td>
					<td><?php echo $var_dato['id_usuario']; ?> </td>

					<td>
						<a class=" btn btn2 " href="editar.php?id=<?php echo $var_dato["id_usuario"];?>">Editar</a>
					</td>
					<td>
						<a class=" btn btn2 " onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=acceso&a=Eliminar&codigo_acceso=<?php echo $r->codigo_acceso; ?>">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	<?php } else {
	echo 'No hay Registros';
}
	?>
	</table>

	<?php include_once '../conexiones/footer.php'; ?>