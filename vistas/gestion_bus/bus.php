


<div class="form-load">
	<div class="head">
		<h1 class="titulo">Buses</h1>
	</div>
	<?php
	$var_consulta = 'SELECT * FROM bus';
	$var_resultado = $obj_conexion->query($var_consulta);
	if ($var_resultado->num_rows > 0) { ?>
		<table>
			<tr>
				<th>Placa</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th class="view center"><a class="icon icon-eye"></a></th>
				<th class="edit center"><a class="icon icon-edit"></a></th>
				<th class="delete center"><a class="icon icon-trash"></a></th>
			</tr>
			<?php
			while ($var_dato = $var_resultado->fetch_array()) { ?>
				<input type="hidden" class="form-control" value="<?php echo $var_dato["id_bus"]; ?>" name="id">


				<tr>
					<td><?php echo $var_dato['placa']; ?></td>
					<td><?php echo $var_dato['marca']; ?></td>
					<td><?php echo $var_dato['modelo']; ?></td>


					<td>

					<input style="display:none;" type="text" name="id">
					<button class="btnview" data-toggle="modal" data-target="#Modal" href="actualizar.php?id=<?php echo $var_dato["id_bus"]; ?>"></button>
						</a>

					</td>
					<td>

					<a href="actualizar.php?id=<?php echo $var_dato["id_bus"];?>">
							<button class="btnedit">
							</button>
							</a>
					</td>
					<td>
						<form action="#" method="POST">
							<input style="display:none;" type="text" name="id">
							<input style="display:none;" type="text" name="userimage">
							<button class="btndelete" name="btn" value="form_delete" type="submit"></button>
						</form>
					</td>
				</tr>

			<?php } ?>
		<?php } ?>
		</table>

		<div class="pages">
		
		</div>
</div>

<div class="form-options">
	<div class="options">

	<form action="registrar.php" method="">
			<button class="btn icon icon-plus"  href="registrar.php"></button>
	</form>


		<form action="#" method="POST">
			<button class="btn disabled icon icon-coding" name="btn" value="form_coding" type="submit" disabled></button>
		</form>
		<form action="#" method="POST">
			<button class="btn disabled icon icon-printer" name="btn" value="form_printer" type="submit" disabled></button>
		</form>
		<form action="/">
			<button class="btnexit icon icon-exit" type="submit"></button>
		</form>
	</div>
	<div class="search">
		<form name="form-search" action="#" method="POST">
			<p>
				<input type="text" class="text" name="search" placeholder="Buscar...">
				<button class="btn-search icon  icon-search" type="submit"></button>
			</p>

		</form>
	</div>
</div>
</div>